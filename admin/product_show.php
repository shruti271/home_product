<?php
require("connection.php");
// require("style_for_pro_dis.css");
// if ($_SESSION['ADMIN_LOGIN']=='yes') 
// {
	
// }else{
// 	header("Location:login.php");
// }
 $qry="select * from product e, category c where e.category_id=c.id";
 // $qry="select id,categories,name,mrp,price,qty,image,short_desc,description,meta_title,meta_desc,meta_keyword,status from product e, category c where e.category_id=c.id";
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
<a href="customer_query.php" id='add'>query</a>
<a href="product_add.php" id='add'>Add product</a><br/><br/><br/><br/>

<link rel="stylesheet" type="text/css" href="style_for_pro_dis.css">

<table border="1">
	<tr>
		<th>id</th>
		<th>categories</th>
		<th>name</th>
		<th>mrp</th>
		<th>price</th>
		<th>qty</th>
		<th>image</th>
		<th>short_desc</th>
		<th>description</th>
		<th>meta_title</th>
		<th>meta_desc</th>
		<th>meta_keyword</th>
		<th>status</th>

		<th>Edit</th>
		<th>Delete</th>
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
			<td class="data"><?php echo $row[5];?></td>
			<td><?php echo "<img src='uploads/$row[6]' width='200px' height='150px'/>"?></td>			
			<td class="data"><?php echo $row[7];?></td>
			<td class="data"><?php echo $row[8];?></td>
			<td class="data"><?php echo $row[9];?></td>
			<td class="data"><?php echo $row[10];?></td>
			<td class="data"><?php echo $row[11];?></td>
			<td class="data"><?php echo $row[12];?></td>
			<!-- <td class="data"> -->
				<!-- <?php echo $row[12];?></td>  -->
			
			<td><a href="product_update.php?id=<?php echo $row[0];?>" id='edit'>Edit</a></td>
			<td><a href="product_delete.php?id=<?php echo $row[0];?>" id='delete'>Delete</a></td>
		</tr>
	<?php	
	}
	mysqli_close($con);
	?>
</table>