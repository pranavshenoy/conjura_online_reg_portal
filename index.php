<?php
	require_once("db_connect.php");
	
	$query="select * from events";       // for dropdown list
	$result_events = $con->query($query);
	if($result_events->num_rows>0)
	{
		echo '<script>';
		echo 'dropdown_code="';
		while($row=$result_events->fetch_assoc())
			echo '<option value='.$row['event_name'].'>'.$row['event_name'].'</option>';
		echo '"';		
		echo '</script>';
	}
?>

<script type="text/javascript">
	var event_count=0;
	var dropdown_code;
	
	function more()
	{
	  var event_loop=' ';
		for(var i=1;i<=document.getElementById("e_count").value;i++)
		{
			 event_loop+='<div class="row">   \
					<div class="col-md-6">\
						<label for="name">*&nbsp;Event Name:</label>\
						<select class="form-control" id="select'+(++event_count)+'" onchange="changing()" name="events'+(event_count)+'" style="border-radius:0px">\
							<option value="" selected>Select...</option>'+dropdown_code+'\
						</select>\
					</div>				\
				</div>';
		}
		document.getElementById("add_event").innerHTML = event_loop;
	}
</script>

<html>

	<head>
		<title>Registration - TES '16</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta name="keywords" content="tes kerala,TES Kerala,TES,TESKerala,teskerala,Entrepreneurship,techno,summit,global,event" />
		<meta name="description" content="TES '16, Global Techno Entrepreneurial Summit, on 9th and 10th April at TKM College of Engineering Kollam" />
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
		<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
		<link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
		<link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
		<link rel="shortcut icon" type="image/ico" href="../images/fav.ico" />
		<script type="text/javascript" src="js/jquery.js"></script>
		<style type="text/css">
			#hack{display:none;}
			#hacke{display: none;}
			#member{display: none;}
			#skill{display: none;}
			#ult{display: none;}
		</style>
	</head>

	<body background="../images/about.jpg" style="height:100%">
		<nav role="navigation" class="navbar navbar-default navbar-fixed-top" style="background-color: black; margin-bottom: 0px;">
			<div class="container-fluid">
				  <div class="navbar-header">
				      <button type="button" data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle">
				          <span class="sr-only">Toggle navigation</span>
				          <span class="icon-bar"></span>
				          <span class="icon-bar"></span>
				          <span class="icon-bar"></span>
				      </button>
				      <a href="http://teskerala.com" class="navbar-brand" style="font-size: 30px; color: white; font-stretch: wider; font-weight: 600;"><font color="#397C86">T</font><font color="#DD9C37">E</font><font color="#397C86">s</font><font color="#397C86"> '16</font></a>
				  </div>
				  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					</div>
			</div>
		</nav>

		<br/><br/><br/><br/><br/>
	
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
						<h4 style="color:red"><?php echo $_SESSION['ERROR']; ?></h4>
				<?php    
					}
					unset($_SESSION['MESSAGE']);
					unset($_SESSION['ERROR']);
				?>
			</center><br/>
			<?php include 'reg_home.php';    ?>
		</div>
		<?php include 'footer.php';  ?>
		<script src="js/jquery.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/main.js"></script>

	</body>
</html>




