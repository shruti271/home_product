	<?php
include("connection.php");

// $qry="select id,category_id,name,mrp,price,qty,image,short_desc,description,meta_title,meta_desc,meta_keyword,status from product where id=".$_POST["id"];
$qry="select * from product where id=".$_GET['id'];
$res=mysqli_query($con,$qry);
print_r($res);
if(isset($_POST["btnUpdate"]))
{	
	$id=$_POST['c_id'];
    $name=$_POST['name'];
    $mrp=$_POST['mrp'];
    $price=$_POST['price'];
    $qty=$_POST['qty'];
    
    $short_desc=$_POST['shortdesc'];
    $desc=$_POST['desc'];
    $meta_title= $_POST['metatitle'];
    $meta_desc=$_POST['metadesc'];
    $meta_key= $_POST['metakey'];
    $status= $_POST['status'];
//------------------------------ for image	
	// $filetmp_path=$_FILES['upload_image']['tmp_name'];	
	// $dest_path=$_FILES['upload_image']['name'];

	if(move_uploaded_file($filetmp_path, $dest_path)) 
		{
		 echo "File uploaded successfully";
		  
		}
		else{
		 echo "Upload Failed"; 
		}

   
	// $updateqry="update product set name='$name', mrp=$mrp, price=$price, qty=$qty, image='$dest_path', short_desc='$short_desc', description='$desc', meta_title='$meta_title', meta_desc='$meta_desc', meta_keyword='$meta_key', status=$status where id=".$_GET['id'];
		$updateqry="update product set category_id=$id,name='$name', mrp=$mrp, price=$price, qty=$qty, short_desc='$short_desc', description='$desc', meta_title='$meta_title', meta_desc='$meta_desc', meta_keyword='$meta_key', status=$status where id=".$_GET['id'];
	$updres=mysqli_query($con,$updateqry)or die(mysqli_error($con));

	if($updres)
	{
		header("Location:product_show.php");
		// echo "updated record";
	}
	mysqli_close($con);
}

$row=mysqli_fetch_array($res);
?>

<link rel="stylesheet" type="text/css" href="product_add_style.css">

<h1>UPDATE PRODUCT </h1>


<div class="wrapper">
	<div class="contact-form">  	  		
  		<div class="product_form">
  			<form method="post" enctype="multipart/form-data">
  				id:<input type="text"  class="fo" value="<?php echo $row[0];?>" disabled><br/>
			    category id:  
				<select name="c_id" class="fo" >
					<?php
						$qry="select * from category";
						$res=mysqli_query($con,$qry);

						while($crow=mysqli_fetch_array($res))
						{
						?>
						<option value="<?php echo $crow[0];?>" <?php if($crow[0]==$row[1]) echo "selected";?> ><?php echo $crow[1];?></option>
						<?php	
						}
					?>
				</select><br/>
			      name<input type="text" name="name" class="fo" value="<?php echo $row[2];?>"><br/>
			      mrp <input type="number" name="mrp" class="fo" value="<?php echo $row[3];?>"><br/>
			      price<input type="number" name="price" class="fo" value="<?php echo $row[4];?>"><br/>
			      qantity<input type="number" name="qty" class="fo" value="<?php echo $row[5];?>"><br/>
			      image<input type="file" name="upload_image" class="fo" value="<?php echo $row[6];?>"><br/>
			      <img src="uploads/<?php echo $row[6];?>" height="200px" width="200px"><br/>			      
			      short desc<input type="text" name="shortdesc" class="fo" value="<?php echo $row[7];?>"><br/>
			      description<input type="text" name="desc" class="fo" value="<?php echo $row[8];?>"><br/>
			      meta title<input type="text" name="metatitle" class="fo" value="<?php echo $row[9];?>"><br/>
			      meta desc<input type="text" name="metadesc" class="fo" value="<?php echo $row[10];?>"><br/>
			      meta keyword<input type="text" name="metakey" class="fo" value="<?php echo $row[11];?>"><br/>
			      status<input type="number" name="status" class="fo" value="<?php echo $row[12];?>"><br/>

			      <input type="submit" name="btnUpdate" name="btnUpdate" class="button" class="fo">
			</form>
		</div><!-- product form -->  
</div><!-- containerform -->
</div><!-- wrraper finish -->
<!-- 		</div>
	</div>
</div> -->

