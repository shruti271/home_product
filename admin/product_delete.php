<?php
include("connection.php");

$qry="delete from product where id=".$_GET["id"];
$res=mysqli_query($con,$qry);

if($res==1)
{
	header("Location:product_show.php");
}
mysqli_close($con);
?>