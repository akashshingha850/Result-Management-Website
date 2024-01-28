<!DOCTYPE html>
<html>

<head>
    <link rel="icon" type="image/jpg" href="image/pro.png">
    <style>
      
        
        
        
       
        @import url(css/font.css);
        @import url(css/font-awesome.min.css); 
        .login-page {
            width: 520px;
            
            height: auto;
            padding: 20% 0 0;
            margin: auto;
            font-family: cursive;
            color: white;
        }
        
        .form {
            position: relative;
            z-index: 1;
            background-image: url(image/board.png);
    
            background-repeat: no-repeat;
            background-size: 100% 100%;
            min-height: 50px;
            max-width: 550px;
            margin: 0 0 100px;
            padding: 20px;
            text-align: center;
            box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
        }
        
        body {
            
            background-image: url(image/stu.png);
    
            background-repeat: no-repeat;
            background-size: 100% 125%;
        }

    </style>
   

</head>

<body>


<?php include('/stunav.php'); ?>
    <div>
         </div>
    <div class="login-page">
        <div class="form">
            <span id="login-page"> <?php include('/selectstu.php'); ?> </span>
        </div>

    </div>



</body>

</html>
