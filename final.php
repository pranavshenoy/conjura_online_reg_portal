<?php  
	require_once("db_connect.php");
	function insert_participant($name,$email,$phone,$accommodation,$gender,$college,$con)
	{
		$temp=get_part_id($email,$phone,$con);	
		if($temp==-1)
		{
			$query="INSERT INTO participants (name,college,email,phone,gender,accommodation) VALUES   ('$name','$college','$email','$phone','$gender','$accommodation')";
			$result = $con->query($query);		
			
			if($result)	
				return get_part_id($email,$phone,$con);
			else 
			 	return -1;	
		}
		return $temp;         //id
	}
	
	function insert_event_part ($part_id,$event_id,$paid,$trans_id,$con)
	{
		$query="INSERT INTO event_participants (part_id,event_id,paid,trans_id) VALUES   ($part_id,$event_id,'$paid','$trans_id')";
		$result = $con->query($query);
		if($result==TRUE)	
			return 1;
		else 
		 	return -1;
	}
	
	function insert_transaction ($part_id,$amt,$trans_id,$acnt_no,$con)
	{
		$query="INSERT INTO transactions (part_id,amt,trans_id,acnt_no) VALUES  ($part_id,$amt,'$trans_id','$acnt_no')";
		$result = $con->query($query);
		if($result==TRUE)	
			return 1;
		else 
		 	return -1;
	}
	
	function insert_team ($event_id,$head_id,$member_id,$con)
	{
		$query="INSERT INTO team (event_id,head_id,member_id) VALUES   ($event_id,$head_id,$member_id)";
		$result = $con->query($query);
		if($result==TRUE)	
			return 1;
		else 
		 	return -1;
	}
	
	function get_part_id($email,$phone,$con)
	{
		$query = "select * from participants where email='$email' and phone='$phone'";
		$result= $con->query($query) or die(mysqli_error($con));
		if($result->num_rows>0) 			//if user has already registered
		{
			$row = $result->fetch_assoc();
			return $row['id'];	
		}	
		return -1;
	}
	
	$temp_flag=1;
	
	if($temp_flag==1)
	{
		$temp_flag=0;
				// insert new user
		if($_SESSION['new_user']==1)
		{
			$_SESSION['new_user']=0;
			$result = $con->query($_SESSION['query']); 
			if(!$result)
			{
				unset($_SESSION['MESSAGE']);
				$_SESSION['ERROR']="Registration Incomplete. You Might be Already Registered with different email or phone";
				header("location:index.php");
				return;
			}
			$_SESSION['head_id']=get_part_id($_SESSION['email_head'],$_SESSION['phone_head'],$con);
		}
		
			// insert members
		for($i=1;$i<=$_SESSION['team_count'];$i++)
		{
			$fullname=cleanup($_POST['fullName'.$i],$con);
			$college=cleanup($_POST['college'.$i],$con);
			$email=cleanup($_POST['email'.$i],$con);
			$phone=cleanup($_POST['phone'.$i],$con);
			$gender=$_POST['gender'.$i];
			if(isset($_POST['accommodation'.$i]))
				$accommodation='y';
			else	
				$accommodation='n';	

			$verify=insert_participant($fullname,$email,$phone,$accommodation,$gender,$college,$con);
		 
		  if($verify==-1)  // verify is the member id
			{
				unset($_SESSION['MESSAGE']);
				$_SESSION['ERROR']="Registration Incomplete.".strtoupper($fullname)."  has already registered using other credentials";
				header("location:index.php");
				return;
			}
		}
		
		//store in transactions database
		$trans_id=cleanup($_POST['trans_id'],$con);
		$acnt_no=cleanup($_POST['ac_no'],$con);
	
		if(isset($_POST['trans_id']) && isset($_POST['ac_no']))
		{
			$verify=insert_transaction($_SESSION['head_id'],$_SESSION['total_amt'],$trans_id,$acnt_no,$con);
			if($verify==-1)
			{
				unset($_SESSION['MESSAGE']);
				$_SESSION['ERROR']="Registraion Incomplete";
				header("location:index.php");
				return;
			}	
		}
		
		//store in event_participation
		if(isset($_POST['trans_id']) && isset($_POST['ac_no']))
			$paid='y';
		else
			$paid='n';
		for($i=1;$i<=$_SESSION['e_count'];$i++)	
		{	
			$verify=insert_event_part ($_SESSION['head_id'],$_SESSION['event_id'][$i],$paid,$trans_id,$con);
			if($verify==-1)
			{
				unset($_SESSION['MESSAGE']);
				$_SESSION['ERROR']="Registraion Incomplete";
				header("location:index.php");
				return;
			}
		}

						// adding to team table
		for($i=1;$i<=$_SESSION['team_count'];$i++)
		{
			$email=cleanup($_POST['email'.$i],$con);
			$phone=cleanup($_POST['phone'.$i],$con);
			$member_id=get_part_id($email,$phone,$con);
			
			if($member_id!=-1)
			{
				$verify=insert_team ($_SESSION['team_event_id'][$i],$_SESSION['head_id'],$member_id,$con);
				if($verify==-1)
				{
					unset($_SESSION['MESSAGE']);
					$_SESSION['ERROR']="Registraion Incomplete";
					header("location:index.php");
					return;
				}
			}					
		}
		$_SESSION['MESSAGE']="Registraion Successfull. Your Conjura ID is CT".$_SESSION['head_id'];
		header("location:index.php");
		require_once("initialise.php");	
	}	
?>
