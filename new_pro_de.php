<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="jquery-3.4.1.min.js"></script> 
<style type="text/css">
	.container_detail{
		 display: flex;
	}
	.continer_sub_de{
		text-align: center;
		margin: 50px;
	}
	#buy{
		padding: 10px;
		background-color: #DC381F;
		color: white;
	}
</style>
    
<!-------------------------------------------------------------->
<?php
// session_start();
require("connection.php");
include("top_inc.php");
include("only_fun.php");

// if(!isset($_SESSION['cate_id']))
// $_SESSION['cate_id']=$_GET['cp_id'];
// echo $_SESSION['user_id'];
$qry="select * from product where id=".$_GET['cp_id'];
$res=mysqli_query($con,$qry)or die(mysqli_error());

		while($row=mysqli_fetch_array($res))
		{
?>
<div class="container_detail">
	<div class="img">
		<img src="admin/uploads/<?= $row[6];?>" height="500px">
	</div>
	<div class="continer_sub_de">
				<h2 style="margin: 20px;"><?php echo $row[2];?></h2><?php echo $row[0];?>
		<span style="font-size: 35px" style="margin: 20px;">price:</span> <i class="fa fa-inr" aria-hidden="true"></i><?php echo $row[4];?>
		<s style="margin: 20px;"><i class="fa fa-inr" aria-hidden="true"></i><?php echo $row[3];?></s>

		<p><?php echo $row[7]; ?></p><br>		
		<?php 
		$qty=1;
function callchange($qt)
{
$qty=$qt;
 // echo $qty; 
alert($qty);
}
// echo $qty; 
		 ?>		 
		quantity:<input type="number" name="num" value="1" onkeyup="callchange(this.value)"><br>
		
		<button style="margin: 40px; background: gray; padding: 10px;" ><a href="only_fun.php?pro_id=<?php echo $row[0]; ?>&qty=<?php echo $qty; ?>">add to cart</a></button> 		

		<p>
			<h1>description</h1>
			<?php echo $row[8]; ?>
		</p>			
	</div>
</div>

 <?php } ?> 

 <script type="text/javascript">
 	// function callchange(id)
 	// {
 	// 	<?php $qty=id;  ?>
 	// }
 </script>