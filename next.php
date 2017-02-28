<?php

	require_once("db_connect.php");
	
	$fullname=cleanup($_POST['fullName'],$con);
	$college=cleanup($_POST['college'],$con);
	$email=cleanup($_POST['email'],$con);
	$phone=cleanup($_POST['phone'],$con);
	$_SESSION['e_count']=cleanup($_POST['e_count'],$con);
	$_SESSION['msg_pre_pay']='pre payment mandatory for :';
	$_SESSION['total_amt']=0;
	$_SESSION['new_user']=0;
	$gender=$_POST['gender'];
	
	if(isset($_POST['accommodation']))
		$accommodation='y';
	else	
		$accommodation='n';
	
	
	if(isset($fullname) && isset($college) && isset($email) && isset($phone) && isset($gender) && $_SESSION['e_count']>=1 )
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
				$_SESSION['email_head']=$email;
				$_SESSION['phone_head']=$phone;				
		}
		
		//fetch event details
		$pre_pay_flag =0;   // pre payment required
		$event_temp=0;			// for storing event-id
		$e_team_temp=0;			// number of team events selected  ---count
		$query="select * from events";     
		$result_events = $con->query($query);
?>
 <html>

	<head>
		<title>Registration -Conjura 17</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta name="keywords" content="conjura,Conjura,tkm,cultural,tkmce,techno,national,,event" />
		<meta name="description" content="National Level Techno-Cultural Fest of TKM College Of Engineering, Kollam, Kerala.March 16 - 19, 2017" />
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
		
		<link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
		<
		<link rel="shortcut icon" type="image/ico" href="../images/fav.ico" />
		<script type="text/javascript" src="js/jquery.js"></script>
		
	</head>

	<body " style="height:100%">
		<nav role="navigation" class="shadow navbar navbar-default navbar-fixed-top" style="background-color: white; ">
			<div class="container-fluid">
				  <div class="navbar-header">
				      
				      
				  </div>
				  
			</div>
		</nav>

		<br/><br/><br/>
	
		<div class="container">
		<h2 style="text-align: center;">PAYMENT</h2><br/>
		<div class="form-labels-on-top">
		<form method="post" id="form2" class="form-horizontal" role="form" action="final.php"> <div id="error" ></div>	 
<?php
		if($result_events->num_rows>0)
		{
			while($row=$result_events->fetch_assoc())
			{		
					for($i=1;$i<=$_SESSION['e_count'];$i++)
					{	
						if(strcmp($row['event_name'],cleanup($_POST['events'.$i],$con))==0)           // checks whether the entered event by user is $row[]
						{
							$event_temp++;
							$_SESSION['event_id'][$event_temp]=$row['event_id'];
														
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
								$_SESSION['team_event_id'][$e_team_temp]=$row['event_id'];
								include 'team_member.php';
							}
						}
					}			
			}
		}
		
	}
	else
	{
		$_SESSION['ERROR']='ALL FIELDS ARE MANDATORY';
		header("location:index.php");
	}
	//echo "Total amount to be paid is:  ".$_SESSION['total_amt'];
	echo "<h4 class='teamEvent'><span class='teamEventdetails'>Total amount to be paid is </span><span class='amount'>".$_SESSION['total_amt']."</span></h4>";
	include 'transaction.php';
	$_SESSION['team_count']=$e_team_temp;
?>
<div style="text-align: center;margin-top: 18px;">
<button type="submit" style="border-radius:0px;margin-right: :5px;" class="btn btn-primary" >Register</button>
<button style="border-radius:0px;margin-left: 5px;" class="btn btn-primary">Pay Amount</button>
</div>






</form>

</div>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
</div>
<?php include 'footer.php';  ?>
</body>
</html>
