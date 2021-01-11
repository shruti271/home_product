<?php  
require("connection.php");
?>
<html>
    <head>
     <meta charset="UTF-8">
     <title>online store</title>
     <!-- <link rel="stylesheet" href="style.css"> -->
     <link href="https://fonts.googleapis.com/css2?family=Srisakdi:wght@700&display=swap" rel="stylesheet"><!--for font-->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <script src="jquery-3.4.1.min.js"></script>     
     <link rel="stylesheet" type="text/css" href="top_inc_style.css">    
    </head>
<body>
    <!-- <div class="main"> -->
    <div class="container">
        <div class="header">
        <div class="navbar">
            <div class="logo">                
                <h1>home decore</h1>                
            </div>
            <nav class="cnav">

            <ul>
                <!-- <li><input type="text" name="search" onkeyup="search_pro(this.value)" style="border-radius: 10px; width: 600px; height: 30px;" placeholder="search product.."></li> -->
                <li><a href="home.php">home</a></li>
                <li class="dropdown"><!-- <a href="">product</a> -->product
                       <div class="dropdown-content">
                        <?php 
                        $qry="select * from category";
                            $res=mysqli_query($con,$qry)or die(mysqli_error($con));            

                                while($row=mysqli_fetch_array($res)){
                        ?>
                           <a href="productall.php?id=<?php echo $row[0]; ?>" value="<?php echo $row[1];?>"><?php echo $row[1];?></a>
                       <?php } ?>
                       </div>                       
                </li>

                <li><a href="contact.php">about</a></li>
                <!-- <li><a href="">account</a></li> -->
            </ul>
            </nav> <!-- navfinish -->
            
            <a href="new_cart.php"><i class="fa fa-shopping-cart"></i></a>
                    <div style="color: black">                        
            <div class="log-continer">&nbsp
                <a href="user_login.php"><?php if(isset($_SESSION['ADMIN_USER'])){ echo $_SESSION['ADMIN_USER'];} else{ echo "account";} ?></a>
                <a href="user_logout.php"> <i class="fa fa-power-off" aria-hidden="true"></i></a>
            </div>
        </div>
        </div> <!-- navbar finish -->
        </div> <!-- header finsi -->
        



</div> <!-- conatiner finish -->


