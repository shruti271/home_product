<?php 
require("connection.php");
include("table.php");
// $id=$_GET['page_no'];

                        $qry="select * from category";
                        $res=mysqli_query($con,$qry)or die(mysqli_error($con));                                    


$output="";
if(mysqli_num_rows($res)>0)
{

	$output.='<table border="2">';
	 while($row=mysqli_fetch_array($res)){
		$output.='<tr align="center"><td>'.$row["id"].'</td><td>'.$row["categories"].'</td></tr>';
	}
		
	$output.='</table>';
	$output.='<div id="pagination">
		<a href="" id="1">1</a>
	</div>';
	echo $output;
}else{
	echo "no recored";
}$out="";

 ?>