<?php  
include("connection.php");
// include("function.php");

$msg="";

if(isset($_POST['submit']))
{	
	 $username=mysqli_real_escape_string($con,$_POST['uname']);
		 // $username=$_POST['uname'];
	 // $password=$_POST['password'];
	 $password=mysqli_real_escape_string($con,$_POST['password']);

	 $sql="select * from admin_user where username='admin' and paswword='admin' ";
	 $res=mysqli_query($con,$sql);
	 
		if(mysqli_num_rows($res)==1)	
		           echo "enter valid detail";
 		else
 			{
 				session_start();
 				$_SESSION["ADMIN_LOGIN"]='yes';
 				$_SESSION["ADMIN_USER"]=$username;
 		header('location:product_show.php');
 		// die();
 	}
}
?>
<html>
<head>
	<title>loge in page</title>
</head>
<body>
	<form method="post">
		NAME : <input type="text" name="uname" required><br>
		PASSWORD : <input type="password" name="password" required><br>
		<!-- <input type="submit" name="submit"> -->
		<button type="submit" name="submit">submit</button>
		<div>
			<?php echo $msg; ?>
		</div>
	</form>
</body>
</html>