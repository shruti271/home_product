<?php
require("connection.php");
// require("style_for_pro_dis.css");
session_start();
if($_SESSION['ADMIN_LOGIN']=='yes')
{
	
}else{
	header("Location:login.php");
}
 $qry="select * from query_tb";
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
<a href="product_add.php" id='add'>Add product</a><br/><br/><br/><br/>

<link rel="stylesheet" type="text/css" href="style_for_pro_dis.css">

<table border="1">
	<tr>		
		<th>first name</th>
		<th>email</th>
		<th>subject</th>	
		<th>description</th>	
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
		</tr>
	<?php	
	}
	mysqli_close($con);
	?>
</table>