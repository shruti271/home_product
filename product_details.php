<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="jquery-3.4.1.min.js"></script> 
<style type="text/css">
	.container_detail{
		 display: flex;
	}
	.continer_detail{
		text-align: center;
		margin: 50px;
	}
	#buy{
		padding: 10px;
		background-color: #DC381F;
		color: white;
	}
</style>
    
<!-- ---------------------------------------------------------- -->
<?php
require("connection.php");
include("top_inc.php");
// require("cart_function.php");
// require("javascript_fun.php");
// session_start();

if(isset($_GET['submit']) && isset($_GET['id']))
{
	echo "dfuisdf";
	$pid=$_GET['id'];
	$qry="select * from product where id=".$pid;

	$res=mysqli_query($con,$qry)or die(mysqli_error());	
	$row=mysqli_fetch_array($res);		
	$_SESSION['cart'][$pid]['qty'] = 1;
	echo $_SESSION['cart'][$pid];
}
if(isset($_GET['id']))
{
	$oldid=$_GET['id'];
}
$qry="select * from product where id=".$_GET['id'];
$res=mysqli_query($con,$qry)or die(mysqli_error());

		if(!$res)
		{
			die("Invalid query".mysqli_error($con));
		}

		if(mysqli_num_rows($res)==0)
		{
			echo "no rows found";
		}	
	
		while($row=mysqli_fetch_array($res)){
		
?>
<div class="container_detail" style="width: 100%;">
	<div class="img" style="width: 40%;">
		<img src="admin/uploads/<?php echo $row[6];?>">
	</div>
	<div class="continer_detail">
		<h2 style="margin: 20px;"><?php echo $row[2];?></h2>
		<span style="font-size: 35px" style="margin: 20px;">price:</span> <i class="fa fa-inr" aria-hidden="true"></i><?php echo $row[3];?>
		<s style="margin: 20px;"><i class="fa fa-inr" aria-hidden="true"></i><?php echo $row[4];?></s>

		<p><?php echo $row[7]; ?></p><br>
		<!-- <form method="post"> -->
		quantity:<input type="number" name="num" onchange="callchange(this)"><br>
		<a href="cart.php">go</a>
		<!-- <input type="submit" name="submit" value="add to cart" style="margin: 40px; background: gray; padding: 10px;"> -->
		 <button style="margin: 40px; background: gray; padding: 10px;" ><a href="product_details.php?add_id=<?php echo $row[0]; ?>">add to cart</a></button> 
		<!-- <input type="submit" name="submit" value="add to cart" onclick="<?php $obj=new Add_to_cart; $obj->addproduct($row[0],1); ?>"> -->
		<!-- <button type="submit" name="submit">add to cart</button> -->
	<!-- </form> -->
	</div>
</div>

 <?php } 
 ?> 
 <?php include("footer_inc.php");?>