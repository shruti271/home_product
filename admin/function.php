<?php 
require("connection.php");

function pr($arr)
{
	echo '<pre>';
	print_r($arr);
	echo '<pre>';
}
function prx($arr)
{
		echo '<pre>';
	print_r($arr);
	die();
}

function get_safe_value($con,$str)
{
	// if($str!='')
	return mysqli_real_escape_string($con,$str);
}
?>
<html>
</html>