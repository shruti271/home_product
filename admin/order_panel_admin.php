<?php
require("connection.php");

 $qry="select * from order_table";
 
$res=mysqli_query($con,$qry);

if(!$res)
{
	die("Invalid query".mysqli_error($con));
}

if(mysqli_num_rows($res)==0)
{
	echo "no rows found";
}

?>
<a href="logout.php" name="logout" id="add">log out</a>

<link rel="stylesheet" type="text/css" href="style_for_pro_dis.css">

<table border="1">
	<tr>
		<th>order id</th>
		<th>product id</th>
		<th>name</th>		
		<th>price</th>
		<th>qty</th>
		<th>image</th>		
		<th>total</th>
		<th>customer id</th>
		<th>deliver position</th>
	</tr>

	<?php
	while($row=mysqli_fetch_array($res))
	{
	?>
		<tr>
			<td class="data"><?php echo $row[0];?></td>
			<td class="data"><?php echo $row[1];?></td>
			<td class="data"><?php echo $row[2];?></td>
			<td class="data"><?php echo $row[3];?></td>
			<td class="data"><?php echo $row[4];?></td>			
			<td><?php echo "<img src='uploads/$row[5]' width='200px' height='150px'/>"?></td>			
			<td class="data"><?php echo $row[6];?></td>
			<td class="data"><?php echo $row[7];?></td>
			<td><button type="submit">order delivered</button></td>
		</tr>
	<?php	
	}
	mysqli_close($con);
	?>
</table>