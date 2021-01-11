<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="jquery-3.4.1.min.js"></script> 
</head>
<body>
<div id="c1">here</div>
	<?php 
	include("connection.php");
	session_start();
	$_SESSION['payment']=0;
	$qry="select * from order_table where cus_id=1";
$res=mysqli_query($con,$qry)or die(mysqli_error($con));
?>

<table border="2" width="90%">
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
      <td><h2><?php echo $row[2]; ?></h2> <span class="itemno"> <?php echo $row[0]; ?> </span></td>
      <td>
	       <input type="number" class="qty"  onkeyup="call_per(this.value,<?php echo $row[3]; ?>,<?php echo $row[0]; ?>)" /> 
	       <span class="price"><b>x</b> <?php echo $row[3]; ?> </span>
   	  </td>
      <td><div id="tp-price<?php echo $row[0];?>" class="per_price"></div></td>

      
      <td>
        <form  method="get" > <input type="submit" name="remove" onclick="this.value=<?php echo $row[0]; ?>" value="remove"> </form> </td>
      
    </tr>
  <?php } ?>
  
  </table>
<button type="submit" onclick="call()">click</button>

<script type="text/javascript">
	function call_per(t,t1,i)
	{		
		t2='tp-price'+i;

		// alert(t1);		
		if(t==0)
		document.getElementById(t2).innerHTML=t1;
	else{
		t1=Number(t1)*Number(t);
		document.getElementById(t2).innerHTML=t1;
	}	

	}

	function call()
	{
		var arr=document.getElementsByClassName("per_price");
		// alert(Object.key(arr).length);		
		// alert(arr.length);	
		var total_p=0;

		for(var i=0;i<=arr.length;i++)
		{
			alert(arr[i].innerHTML);	
			total_p+=Number(arr[i].innerHTML);		
			document.getElementById("c1").innerHTML=total_p;		
		}	
		alert(total_p);
			
	}
</script>

</body>
</html>