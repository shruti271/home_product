<?php 
// session_start();
require("connection.php");
require("cart.php");
require("cart_function.php")
$pid=$_GET['pid'];
$type=$_GET['type'];
                  if($type="del")
                  {
                  	$obj=new Add_to_cart;
                  	$obj->remove_pro($pid);
                  }
?>