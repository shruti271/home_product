<?php
require("connection.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="prostyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Document</title>
</head>
<body>
    <div>
        <?php include("top_inc.php"); ?>
    
    <div class="pro-container">
       
          
        <!-- <div class="product_all_continer"> -->
            <!-- <div class="pr"><a>plants</a></div>
            <div class="pr"><a>bag</a></div>
            <div class="pr"><a>sofa</a></div>
            <div class="pr"><a>mug</a></div>
            <div class="pr"><a>mirror</a></div>
  -->
        <!-- <div class="pro-list"> -->

<!-- row 1 -->

<?php
 $qry="select * from product where category_id=".$_GET['id'];
         $res=mysqli_query($con,$qry);

                if(!$res)
                {
                    die("Invalid query".mysqli_error($con));
                }

                if(mysqli_num_rows($res)==0)
                {
                    echo "no rows found";
                }
                // $row="";
                $row="a";
while($row)
{
    $i=0;
    ?>
    
    <div class="row" style="display: flex;">
  <?php  while($i<4 && $row=mysqli_fetch_array($res))
    {
        // if($i<4){ ?>
        <div class="col-1" style="margin: 20px;">
             <?php echo "<a href='new_pro_de.php?cp_id=$row[0]'><img src='admin/uploads/$row[6]' id='i1' height='300px' width='300px' onmouseover='ovein(this)' onmouseout='oveout(this)'> </a>"; ?>
                    
                    <!-- print_r($row[6]); -->
                    <div class="detail">
                        <h2><?php echo $row[2];?></h2>
                        <i class="fa fa-inr" aria-hidden="true"></i><?php echo $row[4];?>
                    </div>
        
        </div> 
    <?php   $i=$i+1;} ?><!-- col -->
    </div>
<?php } ?><!-- row -->

       </div> 
          
</div>
    <script type="text/javascript">
      function ovein(obj)
      {
        obj.style.transform="scale(1.2,1.2)";
      }
      function oveout(obj)
      {
        obj.style.transform="scale(1,1)";
        
      }
    </script>
</body>
</html>