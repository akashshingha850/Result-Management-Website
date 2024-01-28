<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Registration</title>
  
  
  
      <link rel="stylesheet" href="css/login.css">

<style>
     body{
         background-image: url(image/login_back.jpg);
            background-repeat: no-repeat;
            background-size:cover;
            
    }
    </style>
  
</head>

<body>
 
 <?php include('/homenav.html'); ?>
  <div id="boxForm">
  <h2 id="title">Registration Form</h2>
  <form action="register.php" name="myForm" onsubmit="return validateForm();" method="post" >
   <input class='text' type='text' name='name' placeholder='Name' required>
    <br>
    <input class='text' type='email' name='email' placeholder='Email' required>
    <br>
    <input class='text' type='text' name='roll' placeholder='Roll' required>
    <br>
    <input class='text' id='pass1' name="pass1"  type='password' placeholder='Password' required>
    <br>
    <input class='text' id='pass2' name="pass2" type='password' placeholder='Confirm Password' required>
    <br><p></p>
    
    <br>
    
    <input class='button' type='submit' value='Register' >
  </form>
</div>
  
    <script src="js/index.js"></script>
<script>
function validateForm() {
    var x = document.forms["myForm"]["email"].value;
    var atpos = x.indexOf("@");
    var dotpos = x.lastIndexOf(".");
    if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
        alert("Not a valid e-mail address");
        return false;
    }
}
</script>
</body>
</html>
