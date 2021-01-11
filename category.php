<?php 
include("connection.php");
include("top_inc.php");

if(isset($_POST['type']) && $_POST['type']!='')
{

}
$sql="select * from category";
$res=mysqli_query($con,$sql);
?>
<!-- <html>
<body> -->
        <?php include("slidebar.php"); ?>

<div class="product">   
    <?php 
    echo "<br>";
    include("productall.php"); 
    ?>
</div>
<!--  -------------------------------------feature category------------------------------------- -->
<div class="catagories">
    <div class="small-container">
            <div class="row">
                        <div class="col-3">
                            <img src="/home product website/admin/homedecore/watch1.jpg"> 
                        </div>
                        <div class="col-3">
                            <img src="/home product website/admin/homedecore/watch1.jpg"> 
                        </div>            
                        <div class="col-3">
                            <img src="/home product website/admin/homedecore/watch1.jpg"> 
                        </div>
            </div>
    </div>

</div>
<!--  -------------------------------------product------------------------------------- -->

<div class="small-container-pro">
     
    <h2 class="title">Feature Product</h2>

    <div class="row-pro">
        <div class="col-4">
            <img src="/home product website/admin/homedecore/watch1.jpg">
            <h4>sofa</h4>
            <i class="fa fa-inr" aria-hidden="true"></i>500
        </div>
        <div class="col-4">
            <img src="/home product website/admin/homedecore/img0.jpg">
            <h4>sofa</h4>
            <i class="fa fa-inr" aria-hidden="true"></i>500
        </div>
        <div class="col-4">
            <img src="/home product website/admin/homedecore/img2.jpg">
            <h4>sofa</h4>
            <i class="fa fa-inr" aria-hidden="true"></i>500
        </div>
        <div class="col-4">
            <img src="/home product website/admin/homedecore/img1.jpg">
            <h4>sofa</h4>
            <i class="fa fa-inr" aria-hidden="true"></i>500
        </div>
    </div>
</div>



<?php include('footer_inc.php');?>

</body>
</html>