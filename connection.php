<?php
// session_start();
$con=mysqli_connect("localhost","root","");
$db=mysqli_select_db($con,"web_product");
if(!$con)
 die("in connection error".mysqli_connect_error());
 if(!$db)
 die("in database error".mysqli_connect_error());

?>