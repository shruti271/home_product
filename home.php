<?php 
include("connection.php");
include("top_inc.php");
?>
<!--  -------------------------------------slidebar------------------------------------- -->
        <?php include("slidebar.php"); ?>

<!--  -------------------------------------leatest category done------------------------------------- -->
<style type="text/css">
   .small-container .row{
        display: flex;    
        padding-left: 20%;
        /*padding-right: 200px;*/
        margin-bottom: 60px;                        
    }
    .small-container .col{
        margin: 30px;
    }
    .small-container #heading-h2{
        text-align: center;
        margin: 40px;
    }
    .detail{
        text-align: center;
    }
</style>

<div class="catagories">
    <div class="small-container">
        <h2 id="heading-h2">NEW PRODUCT</h2>
            <div class="row">
                <?php 
                $qry="select * from product order by add_date desc";
                $res=mysqli_query($con,$qry);

                if(!$res)
                {
                    die("Invalid query".mysqli_error($con));
                }

                if(mysqli_num_rows($res)==0)
                {
                    echo "no rows found";
                }
                $i=0;
                while($i<3)
                {
                    $lrow=mysqli_fetch_array($res);
                 ?>

                        <div class="col-1">
                            <?php echo "<a href='new_pro_de.php?cp_id=$lrow[0]'><img src='admin/uploads/$lrow[6]' id='i1' height='300px' width='300px' onmouseover='ovein(this)' onmouseout='oveout(this)'> </a>"; ?>
                            
                            <div class="detail">
                                <h2><i class="fa fa-inr" aria-hidden="true"></i><?php echo $lrow[4];?></h2>
                                <h4><i class="fa fa-inr" aria-hidden="true"></i><?php echo $lrow[3];?></h3>
                            </div>
                        </div>
               <?php $i=$i+1; } ?>
                       
            </div>
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

<?php include('footer_inc.php');?>

</body>
</html>