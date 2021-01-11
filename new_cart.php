<?php 
require("connection.php");

session_start();

if(!isset($_SESSION['ADMIN_LOGIN']) && $_SESSION['ADMIN_USER']=''){
header('localhost:home.php');die();
}


if(isset($_GET['remove'])){  
    $qry="delete from order_table where  o_id=".$_GET['remove'];    
    $res=mysqli_query($con,$qry)or die(mysqli_error($con));   
}
// function del_call($id)
// {

//       $qry="delete from order_table where o_id=".$id;
//     // cus_id=".$_SESSION['user_id']."and
//     $res=mysqli_query($con,$qry)or die(mysqli_error($con));
//     if($res)
//     {
//       echo "deleted";
//     }

// }
?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <meta name="viewport" content="width=detailsvice-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="cart_css.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="jquery-3.4.1.min.js"></script> 
</head>
<body onload="calltotal()">
<div class="wrap">  
  <header class="cart-header">    
    <h1>Items in Your Cart</h1>
    <span class="btn">Checkout</span> 
  </header>


<div class="cart-detail">
     <?php 
      echo $_SESSION['user_id'];
      echo $_SESSION['ADMIN_USER'];
$qry="select * from order_table where cus_id=".$_SESSION['user_id'];
$res=mysqli_query($con,$qry)or die(mysqli_error($con));

    if(!$res)
    {
      die("Invalid query".mysqli_error($con));
    }

    if(mysqli_num_rows($res)==0)
    {
      echo "<h1  style='text-align: center;''>your cart is empty</h1>";
    }
  // $res=mange_cart($_GET['id']);
    else{
?> <table border="2" width="90%">
    <tr>
      <td style="text-align: center;">img</td>
      <td>name</td>
      <td>price</td>
      <td>qty</td>      
      <td>remove</td>
    </tr><?php      
    while($row=mysqli_fetch_array($res))
    {
?>          
      
    <tr>
      <td><img class="product-img" src="admin/uploads/<?php echo $row[5]; ?>" height="200px" width="200px" /></td>
      <td><h2><?php echo $row[2]; ?></h2> <span class="itemno">  </span></td>
      <td> 
        <input type="number" class="qty" value="1" onkeyup="checkqty(this.value,<?php echo $row[3]; ?>,<?php echo $row[0]; ?>)" /> 
        <span class="price"><b>x</b> <?php echo $row[3]; ?> </span></td>
      <td><div id="tp-price<?php echo $row[0];?>" name="total_price" class="price_of_total"><?php echo $row[3];?></div></td>

      
      <td>
        <form  method="get" > <input type="submit" name="remove" onclick="this.value=<?php echo $row[0]; ?>" value="remove"> </form> </td>
      
    </tr>
  <?php } }?>
  <tr><td><h2>total</h2></td><td colspan="4"><div id="tot" style="text-align: right;">total</div>  </td></tr>
  </table>
  <!-- <button onclick="calltotal()" type="submit">total price</button> -->
  
</div>     
<script type="text/javascript">
  function checkqty(t,t1,i)
  {        
    t2='tp-price'+i;
    if(t==0)
    document.getElementById(t2).innerHTML=t1;
  else{
    t1=Number(t1)*Number(t);
    document.getElementById(t2).innerHTML=t1;
  }
  calltotal();
  qtyupdate(t,t1,i); 
  }

  function calltotal()
  {
    var arr=document.getElementsByClassName("price_of_total");
    var total_p=0;
    
    for(var i=0;i<=arr.length;i++)
    {
      total_p+=Number(arr[i].innerHTML);      
      document.getElementById("tot").innerHTML=total_p;
    }        
  }

function qtyupdate(t,t1,i)
{
    <?php 
   $oid='i';
   // echo $oid;   
   // $qty_u='t';
   // $total_u='t1';
      // $qry="update order_table set qty=$qty_u,total=$total_u where cus_id=".$_SESSION['user_id']."o_id=$oid";
      // mysqli_query($con,$qry);
   //    $row=mysqli_fetch_array($res);

    ?>
    // document.getElementById("tsot").value="<?php echo $oid; ?>"
}
</script>

<?php 
	      // $qry="update order_table set qty=$qty_u,total=$total_u where cus_id=".$_SESSION['user_id']."o_id=$oid";
      // mysqli_query($con,$qry);
   //    $row=mysqli_fetch_array($res);
 ?>
</div>        
</body>
</html>