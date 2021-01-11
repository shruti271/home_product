<?php 
require("connection.php");
// require("cart_function.php");
// require("javascript_fun.php");
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <meta name="viewport" content="width=detailsvice-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="cart_css.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script type="text/javascript"></script>
</head>
<body>
<div class="wrap">
  <button onclick="goback()">go back</button>
  <header class="cart-header">    
    <h1>Items in Your Cart</h1>
    <span class="btn">Checkout</span> 
  </header>


<div class="cart-detail">
  <table border="2" width="100%">
    <th>
      <td>img</td>
      <td>name</td>
      <td>price</td>
      <td>qty</td>      
      <td>remove</td>
    </th>
     <?php 
      foreach($_SESSION['cart'] as $key => $val)
      {
              $qry="select * from product where id=".$key;
              $res=mysqli_query($con,$qry)or die(mysqli_error());    
              $row=mysqli_fetch_array($res);    
        ?>
      
    <tr>
      <td><img class="product-img" src="admin/uploads/<?php echo $row[6]; ?>" height="200px" width="200px" /></td>
      <td><h2><?php echo $row[2]; ?></h2> <span class="itemno"> <?php echo $row[0]; ?> </span></td>
      <td> <input type="text" value="3" class="qty" /> <span class="price"><b>x</b> <?php echo $row[4]; ?> </span></td>
      <td><span class="tp-price" value="<?php echo $row[4]*2; ?>"><?php echo $row[4]*2; ?></span></td>
      <td><input type="submit" name="submit" value="remove"></td>
    </tr>
  <?php } ?>
  </table>
</div>     

</div>        
</body>
</html>