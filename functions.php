<?php
function cleanup ($str1)
{
	$str1=mysql_real_escape_string($str1);
	$str1=strip_tags($str1);
	$str1=addslashes($str1);
	return $str1;
}
?>