<?php  
	require_once("db_connect.php");

	function insert_participant($name,$email,$phone,$accommodation,$gender,$college)
	{
		$query="INSERT INTO participants (name,college,email,phone,gender,accommodation) VALUES   ('$fullname','$college','$email','$phone','$gender','$accommodation')"
	
	}

?>
