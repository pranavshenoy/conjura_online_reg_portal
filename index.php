<?php
	require_once("db_connect.php");
	require_once("initialise.php");
	
	$query="select * from events";       // for dropdown list
	$result_events = $con->query($query);
	if($result_events->num_rows>0)
	{
		echo '<script>';
		echo 'dropdown_code="';
		while($row=$result_events->fetch_assoc())
			echo '<option value='.$row['event_name'].'>'.$row['event_display'].'</option>';
		echo '"';		
		echo '</script>';
	}
?>

<script type="text/javascript">
	var dropdown_code;
	
	function more()
	{
	  var event_loop=' ';
	  var event_count=0;
		for(var i=1;i<=document.getElementById("e_count").value;i++)
		{
			 event_loop+='<div>   \
					<div class="col-xs-12">\
						<label for="name">Event Name&nbsp;*</label>\
						<select class="form-control" id="select'+(++event_count)+'" onchange="changing()" name="events'+(event_count)+'" style="border-radius:0px">\
						'+dropdown_code+'\
						</select>\
					</div>				\
				</div>';
		}
		document.getElementById("add_event").innerHTML = event_loop;
	}
</script>

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
				       <a class="navbar-brand" href="#">
					    
					  </a>
				      
				  </div>
				  
			</div>
		</nav>

		<br/><br/><br/>
	
		<div class="container">
			<center><h2>REGISTRATION</h2><br/>
				<?php
					if (isset($_SESSION['MESSAGE']))
					{
				?>  
					<h4 style="color:green"><?php echo $_SESSION['MESSAGE']; ?></h4>
				<?php  
					}
					else if (isset($_SESSION['ERROR']))
					{
				?>
						<h4 style="color:#96044b;"><?php echo $_SESSION['ERROR']; ?></h4>
				<?php    
					}
					unset($_SESSION['MESSAGE']);
					unset($_SESSION['ERROR']);
				?>
			</center>
			<?php include 'reg_home.php';    ?>
		</div>
		<?php include 'footer.php';  ?>
		<script src="js/jquery.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/main.js"></script>

	</body>
</html>




