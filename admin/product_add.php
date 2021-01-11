<?php
require("connection.php");

if(isset($_POST["btnInsert"]))
{
	$id=$_POST['id'];
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
	// print_r($_FILES['upload_image']);
	$filetmp_path=$_FILES['upload_image']['tmp_name'];
	// echo "$filetmp_path";
	$dest_path="uploads/".$_FILES['upload_image']['name'];
	$des_path=$_FILES['upload_image']['name'];
	if(move_uploaded_file($filetmp_path, $dest_path))
	{
		echo "File uploaded successfully";
		$insqry="insert into product(id,category_id, name, mrp, price, qty, image, short_desc, description, meta_title, meta_desc, meta_keyword, status) values(NULL,$id,'$name',$mrp,$price,$qty,'$des_path','$short_desc','$desc','$meta_title','$meta_desc','$meta_key',$status)";

		$inres=mysqli_query($con,$insqry) or die(mysqli_error($con));

			if($inres)
	{
		echo "Record inserted";
		header("Location:product_show.php");		
	}
	else{
		echo "error";
	}
	}
	else
	{
		echo "Upload Failed";
	}
	
 


	mysqli_close($con);
}
?>

<link rel="stylesheet" type="text/css" href="product_add_style.css">
<!-- html-------------------------------------------------------------------------------------------------------------------------------------- -->
<h1>ADD NEW PRODUCT </h1>
<div class="wrapper">
	<div class="contact-form">
  <!-- <form method="get"> -->

  	<form method="post" enctype="multipart/form-data">
  		<div class="product_form">
    category id: 
	<select name="id" class="fo">
		<?php
			$qry="select * from category";
			$res=mysqli_query($con,$qry);

			while($row=mysqli_fetch_array($res))
			{
			?>
			<option value="<?php echo $row[0];?>"><?php echo $row[1];?></option>
			<?php	
			}
		?>
	</select><br/>
	  <!-- category id: <input type="number" name="id"><br/> -->
      name<input type="text" name="name" class="fo"><br/>
      mrp <input type="number" name="mrp" class="fo"><br/>
      price<input type="number" name="price" class="fo"><br/>
      qantity<input type="number" name="qty" class="fo"><br/>
      image<input type="file" name="upload_image" class="fo"><br/>
      short desc<input type="text" name="shortdesc" class="fo"><br/>
      description<input type="text" name="desc" class="fo"><br/>
      meta title<input type="text" name="metatitle" class="fo"><br/>
      meta desc<input type="text" name="metadesc" class="fo"><br/>
      meta keyword<input type="text" name="metakey" class="fo"><br/>
      status<input type="number" name="status" class="fo"><br/>

      <input type="submit" name="btnInsert" class="button" class="fo">

  </form>
</div><!-- product form -->
</div><!-- container -->
</div><!-- wrraper finish -->
<!-- 		</div>
	</div>
</div> -->

