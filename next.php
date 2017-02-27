<?php
	require_once("functions.php");
	require_once("db_connect.php");
	$fullname=cleanup($_POST['fullName']);
	$college=cleanup($_POST['college']);
	$email=cleanup($_POST['email']);
	$phone=cleanup($_POST['phone']);
	$_SESSION['e_count']=cleanup($_POST['e_count']);
	$_SESSION['msg_pre_pay']='pre payment mandatory for :';
	$_SESSION['total_amt']=0;
	$_SESSION['new_user']=0;
	
	if(isset($_POST['phone']))
		$accommodation='y';
	else	
		$accommodation='n';
	$gender=$_POST['gender'];
	
	if(isset($fullname) && isset($college) && isset($email) && isset($phone) && isset($gender) )
	{
		$query="select * from participants where email='".$email."' and phone='".$phone."';";
		$result = $con->query($query);

		if($result->num_rows>0) 			//if user has already registered
		{
			$row=$result->fetch_assoc();
			$_SESSION['head_id']=$row['id'];           //  stores the id of lead participant
		}	
		else
		{
			$_SESSION['query']="INSERT INTO participants (name,college,email,phone,gender,accommodation) VALUES	('$fullname','$college','$email','$phone','$gender','$accommodation')";
				$_SESSION['new_user']=1;
		//	$result = $con->query($_SESSION['query']) or die(mysqli_error($con));        for next page 
		}
		
		//fetch event details
		$pre_pay_flag =0;   // pre payment required
		$event_temp=1;			// for storing event-id
		$e_team_temp=0;			// number of team events selected
		$query="select * from events";     
		$result_events = $con->query($query);
?>

		<form method="post" id="form1" class="form-horizontal" role="form" action="final.php"> <div id="error" style="text-align:center"></div>	 

<?php
		if($result_events->num_rows>0)
		{
			while($row=$result_events->fetch_assoc())
			{
					for($i=1;$i<=$_SESSION['e_count'];$i++)
					{
						if(strcmp($row['event_name'],$_POST['events'.$i])==0)           // checks whether the entered event by user is $row[]
						{
							$_SESSION['event_id'][$event_temp]=$row['event_id'];
							$event_temp++;
							
							// total amount
							$_SESSION['total_amt']+=$row['amount'];
					
							//for pre payment
							if(strcmp($row['pre_reg'],'y')==0)             
							{
								$pre_pay_flag=1;		
								$_SESSION['msg_pre_pay']+=' '.$row['event_name'];					 
							}
							
							//team event 
							if(strcmp($row['team'],'y')==0)
							{
								$e_team_temp++;
								$_SESSION['team_event'][$e_team_temp]=$row['event_id'];
								include 'team_member.php';
							}
						}
					}			
			}
		}
	}
	else
	{
		$_SESSION['MESSAGE']='ALL FIELDS ARE MANDATORY';
		//redirect to home page
	}
	echo "Total amount to be paid is:  ".$_SESSION['total_amt'];
	include 'transaction.php';
?>


<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
</form>



