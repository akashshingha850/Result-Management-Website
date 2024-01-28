<?php
include("dbcon.php"); 
 //$id=$_POST['Roll'];
$name=$_POST['name'];
$roll=$_POST['roll'];
$email=$_POST['email'];
$emailnew=$_POST['emailnew'];
$opass=$_POST['opass'];
$pass1=$_POST['pass1'];
$pass2=$_POST['pass2'];

$result = mysql_query("SELECT * FROM login WHERE email LIKE '$email'"); 
   $info = mysql_fetch_array($result);
    $pass =$info['pass'];
    
 //echo "$pass";
if(!$info)
    {
        echo("Email not valid. Please Try again."); 
        header( "refresh:3;url=update_pass.html" );
        
    }
else
    {
    if($pass1==$pass2 && $opass==$pass)
    {
        $sql="UPDATE login SET pass='$pass1', name='$name', roll='$roll', email='$emailnew'  WHERE email='$email'";
        if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
        echo("Account Updated. Redirecting to Home");
        
        
header( "refresh:3;url=student.php" );
    }
    
    else
    {
        
        echo("Password Error !!! Please try Again");
header( "refresh:3;url=update_pass.html" );
    }
    
    }
?> 