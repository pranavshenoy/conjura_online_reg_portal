<?php
	require_once("functions.php");
	session_start();
	define('DB_HOST', 'localhost'); 
	define('DB_NAME', 'conjura'); 
	define('DB_USER','root'); 
	define('DB_PASSWORD',''); 
	$con=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or die("Failed to connect to MySQL: " . mysql_error()); 
	
	$fullname=cleanup($_POST['fullName']);
	$college=cleanup($_POST['college']);
	$email=cleanup($_POST['email']);
	$phone=cleanup($_POST['phone']);
	$_SESSION['e_count']=cleanup($_POST['e_count']);
	$_SESSION['msg_pre_pay']='pre payment mandatory for :';
	$_SESSION['total_amt']=0;
	
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
		//	$result = $con->query($_SESSION['query']) or die(mysqli_error($con));        for next page 
		}

		//fetch event details
		$pre_pay_flag =0;   // pre payment required
		$event_temp=1;			// for storing event-id
		$e_team_temp=0;			//first increment then use 
		$query="select * from events";     
		$result_events = $con->query($query);
?>

	<form method="post" id="form1" class="form-horizontal" role="form" action="database.php"> <div id="error" style="text-align:center"></div>	 

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
								echo "Team Event Details for ".$row['event_name'];
								?>
										<div class="form-group">
													<div class="col-md-4">
														<label for="name">*&nbsp;Full Name: </label>
														<input type="text" class="form-control" style="border-radius:0px" name=<?php echo "fullname".$e_team_temp ?> id="fullName" placeholder="Enter your Full Name" required>

													<div class="col-md-4">
														<label for="name">*&nbsp;College: </label>
														<input type="text" class="form-control" style="border-radius:0px" name=<?php echo "college".$e_team_temp ?> id="college" placeholder="Enter your College Name" required >
													</div>
												</div>

												<div class="form-group">
													<div class="col-md-4">
														<label for="name">*&nbsp;Email Id: </label>
														<input type="email" class="form-control" style="border-radius:0px" name=<?php echo "email".$e_team_temp ?> id="email" placeholder="Enter your Email Id">
													</div>
													<div class="col-md-4">
														<label for="name">*&nbsp;Contact Number: </label>
														<input type="text" class="form-control" style="border-radius:0px" name=<?php echo "phone".$e_team_temp ?> id="phone" placeholder="Enter your Contact Number" required>
													</div>
												</div>

												<div class='form-group'>
													<div class="col-md-4">
														<label for="name">Need Accommodation?:</label>
														<div class="radio">
															<label><input type="checkbox" value="y" id="sw" name=<?php echo "accommodation".$e_team_temp ?>>&nbsp;&nbsp;Yes</label>
														</div>
													</div>
													<br/>
													<div class="col-md-4">
														<label for="name">*&nbsp;Gender:</label>
														<div class="radio">
															<label><input type="radio" value="m" id="sw" name=<?php echo "gender".$e_team_temp ?>>&nbsp;&nbsp;Male</label>
															<label><input type="radio" value="f" id="sw" name=<?php echo "gender".$e_team_temp ?>>&nbsp;&nbsp;Female</label>
														</div>
													</div>
												</div>								
								<?php	 
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
	echo $_SESSION['total_amt'];
?>

<button type="submit" >REGISTER</button><button >PAY</button>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
</form>



