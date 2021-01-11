<script src="jquery-3.4.1.min.js"></script>   
<?php 
require("connection.php");
// session_start();
if(!isset($_SESSION['prvurl'])){
  if(!isset($_GET['login'])){
// $prvurl= $_SERVER['HTTP_REFERER'];
// echo $prvurl."<br>";
// $prvurl=preg_replace( "#^[^:/.]*[:/]+#i", "", $prvurl);
// echo $prvurl."<br>";
// $_SESSION['prvurl']=$prvurl;
// echo $_SESSION['prvurl'];
}
}

if(isset($_POST['login'])){	
	$uname=$_POST['uname'];
	$pass=$_POST['pass'];
	
	$qry="select * from admin_user where username='".$uname."' and password='".$pass."'";echo $qry;
	$res=mysqli_query($con,$qry) or die(mysqli_error($con));	

    $row=mysqli_num_rows($res);
		if($row==0)
		{
			echo "no rows found";
		}
    $row=mysqli_fetch_array($res);
    // print_r($res);
    // echo "<br>";
    session_start();
		// echo $_SESSION['user_id'];
        // if( isset($_SESSION['ADMIN_USER']) || isset($_SESSION['user_id']) )
        // {
        //   unset($_SESSION['ADMIN_USER']);
        //   unset($_SESSION['user_id']);
        //   session_destroy();
               
        //   echo "in yes...<br/>";
        // }
        echo $uname."form form...<br>";
        echo $row[1];
        echo $pass."form form...<br>";
        echo $row[2]; 
        // echo $_SESSION['user_id'];
        if($uname==$row[1] && $pass==$row[2])
        {
            $rid=$_SESSION['reserve_id'];

        
              $_SESSION['ADMIN_LOGIN']='yes';
              //echo $_SESSION['ADMIN_LOGIN'];
              $_SESSION['password']=$pass;
              //echo $_SESSION['ADMIN_LOGIN'];
              $_SESSION['ADMIN_USER']=$uname;//echo $_SESSION['ADMIN_USER'];
              $_SESSION['user_id']=$row[0];  //  echo $_SESSION['user_id']; 
            header("location:new_pro_de.php?cp_id=".$rid);
         }else{echo "not match";}
  //}//else of no row found...
}//if main
  $errormsg="";
  $errormo="";

if(isset($_GET['submit_register']))
{
  $uname=$_GET['uname'];
  $password=$_GET['pass'];
  $cpass=$_GET['cpass'];
  $mo=$_GET['mo_no'];
  $mail=$_GET['mail'];

  if($password==$cpass)
  {    
    if(mb_strlen($mo)==10){
     $qry="insert into admin_user(id,username,password,cpassword,mobileno,email)  values(NULL,'$uname','$password','$cpass',$mo,'$mail')";    
    $res=mysqli_query($con,$qry) or die(mysqli_error($con));  

      if(!$res)
      {
        die("Invalid query".mysqli_error($con));
      }
      else{
        echo "<h1 style='text-align:center;'>you are successfully registered..please log with your account</h1>";
      }  
      }  else{
        $errormo="should 10 digit";
      }
  }
  else
  {
    $errormsg="you password is not maching";
  }
// echo "comming";
 
    // $row=mysqli_num_rows($res);  
}
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="user_login.css">
<div class="main-page">
<div class="container">
  <form method="post" enctype="multipart/form-data">
  	<h1 style="text-align: center;">log in</h1>
    <label >user name</label>
    <input type="text" id="uname" name="uname" placeholder="Your name..">

    <label>password</label>
    <input type="password" id="pass" name="pass" placeholder="password...">
    		<a href="#">do you forgot password?</a>
    <input type="submit" value="submit" name="login" style="justify-content: right;">

  </form>
</div>

<div class="container">
  <form method="get">
  	<h1 style="text-align: center;">Register</h1>
    <label>user name</label>
    <input type="text" id="uname" name="uname" placeholder="Your name..">

    <label>password</label><?php echo "<h5 style='color:red;'>$errormsg</h5>"; ?>
    <input type="password" id="pass" name="pass" placeholder="password...">
    <label>confirm password </label><?php echo "<h5 style='color:red;'>$errormsg</h5>"; ?>
    <input type="password" id="pass" name="cpass" placeholder="password...">
	
	<label>mobile no</label><?php echo "<h5 style='color:red;'>$errormo</h5>" ?>
    <input type="text" name="mo_no" placeholder="mobile no">

    <label>email</label>
    <input type="email" name="mail" placeholder="email">
    <input type="submit" value="Submit" name="submit_register" style="justify-content: right;">

  </form>
</div>
</div>
<script type="text/javascript">
	function user_register()
	{

	}
</script>