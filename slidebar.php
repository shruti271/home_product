<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
 <!-- <div class="row">   -->          
                 <img src="/home product website/admin/homedecore/img1.jpg" height="600px" width="100%" id="im1">            
        <!-- </div>   row finish -->

        <script type="text/javascript">
            var imgs=['img0.jpg','img1.jpg','img2.jpg','img3.jpg'];
            var i=0;
        setInterval(ca,1900);

        var p=document.getElementById("im1");   
            function ca(){  
                // C:\xampp\htdo    cs\home product website\admin
                p.src="/home product website/admin/homedecore/"+imgs[i];  
            i++;
            if(i==3)i=0;
        }
</script>
</body>
</html>
 