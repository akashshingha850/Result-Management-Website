<?php 

session_start();
if($_SESSION)
{
$email=$_SESSION["email"];

{
    include("dbcon.php");
    $result = mysql_query("SELECT * FROM admin WHERE email LIKE '$email'"); 
    $info = mysql_fetch_array($result);
    if($info[email]==$email)
    header( "refresh:0;url=teacher.php" );   
    mysql_query($sql,$con);
    mysql_close($con);
 }
    
{
    include("dbcon.php");
    $result = mysql_query("SELECT * FROM login WHERE email LIKE '$email'"); 
    $info = mysql_fetch_array($result);
    if($info[email]==$email)
    header( "refresh:0;url=student.php" );   
    mysql_query($sql,$con);
    mysql_close($con);
 }
}

?>



<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  
  
  
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
  <h2 id="title">Login Form</h2>
  <form action="login.php" name="myForm" onsubmit="return validateForm();" method="post" >
    <input class='text' type='email' name='email' placeholder='Email' required>
    <br>
    <input class='text' id='pass' name="pass"  type='password' placeholder='Password' required>
    <br><p></p>
    <input id='rememberMe' name='check' value="yes" type='checkbox' checked> <label>Remember me</label>
    <br>
    <input class='button' type='submit' value='Login'>
  </form>
</div>
  
    <script src="js/index.js"></script>
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
