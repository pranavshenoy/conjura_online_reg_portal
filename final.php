<?php  
	
	require_once("db_connect.php");
	
	function insert_participant($name,$email,$phone,$accommodation,$gender,$college,$con)
	{
		$temp=get_part_id($email,$phone,$con);	
		if($temp==-1)
		{
			$query="INSERT INTO participants (name,college,email,phone,gender,accommodation) VALUES   ('$name','$college','$email','$phone','$gender','$accommodation')";
			$result = $con->query($query)  or die(mysqli_error($con));		
			return 1;
		}
		return $temp;         //id
	}
	
	function insert_event_part ($part_id,$event_id,$paid,$trans_id,$con)
	{
		$query="INSERT INTO event_participants (part_id,event_id,paid,trans_id) VALUES   ($part_id,$event_id,'$paid','$trans_id')";
		$result = $con->query($query) or die("event participation".mysqli_error($con));
		return 1;
	}
	
	function insert_transaction ($part_id,$amt,$trans_id,$acnt_no,$con)
	{
		$query="INSERT INTO transactions (part_id,amt,trans_id,acnt_no) VALUES  ($part_id,$amt,'$trans_id','$acnt_no')";
		$result = $con->query($query) or die(mysqli_error($con));
		return 1;
	}
	
	function insert_team ($event_id,$head_id,$member_id,$con)
	{
		$query="INSERT INTO team (event_id,head_id,member_id) VALUES   ($event_id,$head_id,$member_id)";
		$result = $con->query($query) or die(mysqli_error($con));
		return 1;
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
	
	if($_SESSION['new_user']==1)
	{

		$result = $con->query($_SESSION['query']) or die(mysqli_error($con)); 
		$_SESSION['head_id']=get_part_id($_SESSION['email_head'],$_SESSION['phone_head'],$con);
	}
	
	

	//store in transactions database
	$trans_id=cleanup($_POST['trans_id'],$con);
	$acnt_no=cleanup($_POST['ac_no'],$con);
	
	
	$verify=insert_transaction($_SESSION['head_id'],$_SESSION['total_amt'],$trans_id,$acnt_no,$con);
	if($verify!=1)
	{
		$_SESSION['ERROR']="Registraion Incomplete";
		header("location:index.php");
	}	
	
	//store in event_participation
	if(isset($_POST['trans_id']) && isset($_POST['ac_no']))
		$paid='y';
	else
		$paid='n';
			
	for($i=1;$i<=$_SESSION['e_count'];$i++)	
	{	
		$verify=insert_event_part ($_SESSION['head_id'],$_SESSION['event_id'][$i],$paid,$trans_id,$con);
		if($verify!=1)
		{
			$_SESSION['ERROR']="Registraion Incomplete";
			header("location:index.php");
		}
	}
	
	//add member participants

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
		if($verify==1)
		{
			$member_id=get_part_id($email,$phone,$con);
		}
		else // verify is the member id
		{
			$member_id=$verify;
		}
		
		// adding to team table
		
		$verify=insert_team ($_SESSION['team_event_id'][$i],$_SESSION['head_id'],$member_id,$con);
		if($verify!=1)
		{
			$_SESSION['ERROR']="Registraion Incomplete";
			header("location:index.php");
		}
		
		$_SESSION['MESSAGE']="Registraion Successfull. Your Conjura ID is CT".$_SESSION['head_id'];
		header("location:index.php");
	}
	
	

	
		
?>
