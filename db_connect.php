	<?php
	session_start();
	define('DB_HOST', 'localhost'); 
	define('DB_NAME', 'conjura'); 
	define('DB_USER','root'); 
	define('DB_PASSWORD',''); 
	$con=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or die("Failed to connect to MySQL: " . mysql_error()); 
	
	function cleanup ($str1,$con)
	{
		$str1=mysqli_real_escape_string($con,$str1);
		$str1=strip_tags($str1);
		$str1=addslashes($str1);
		return $str1;
	}
	
	?>
