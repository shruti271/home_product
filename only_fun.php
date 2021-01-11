<?php
	require("connection.php");
		session_start();
	if(isset($_GET['pro_id'])){
				$qry="select * from product where id=".$_GET['pro_id'];
				// $qry="select * from product where id=".$id;
				$res=mysqli_query($con,$qry)or die(mysqli_error());
				$row=mysqli_fetch_array($res);

			$p_id=$row[0];
			$name=$row[2];
			$price=$row[4];
			$qty=$_GET['qty'];
			$img=$row[6];
			$total=1200;
		// echo $_SESSION['user_id'];
			
			$_SESSION['reserve_id']=$_GET['pro_id'];
			// echo $_SESSION['reserve_id'];

		if(isset($_SESSION['user_id']))
		{
$qry="insert into order_table(o_id,p_id,name,price,qty,img,total,cus_id) values('NULL',$p_id,'$name',$price,$qty,'$img',$total,	".$_SESSION['user_id'].")";
			$res=mysqli_query($con,$qry)or die(mysqli_error($con));
			// echo $_SESSION['reserve_id'];
			echo "<script type='text/javascript'>alert('add to cart');</script>";
			header("location:new_pro_de.php?cp_id=".$_GET['pro_id']);
		}
		else{
			$_SESSION['reserve_id']=$_GET['pro_id'];
			// echo "in".$_SESSION['reserve_id'];
			echo "log in 1st"; header("location:user_login.php");			
		}
				
		}

?>

