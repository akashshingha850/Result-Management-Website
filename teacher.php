<!DOCTYPE html>
<html>

<head>
    <link rel="icon" type="image/jpg" href="image/pro.png">
    <style>
        body {
            margin: 0;
        }
        
        
        
       
        @import url(css/font.css);
        @import url(css/font-awesome.min.css); 
        .login-page {
            width: 550px;
            padding: 10% 0 0;
            margin: auto;
            font-family: cursive;
            color: red;
        }
        
        .form {
            position: relative;
            z-index: 1;
            background: #FFFFFF;
            max-width: 500px;
            margin: 0 0 0 0;
            padding: 20px 40px 20px 40px; 
            text-align: center;
            box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
        }
        
        body {
            
            background-image: url(image/teacher_back.jpg);
            background-repeat: no-repeat;
            background-size: cover;
        }

    </style>
   

</head>

<body>

<?php include('/adminnav.php'); ?>
    <div>
         </div>
    <div class="login-page">
        <div class="form">
            <span id="login-page"> <?php include('/select.php'); ?> </span>
        </div>

    </div>



</body>

</html>
