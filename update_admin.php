<?php
include("dbcon.php"); 
 //$id=$_POST['Roll'];
$name=$_POST['name'];
$email=$_POST['email'];
$emailnew=$_POST['emailnew'];
$opass=$_POST['opass'];
$pass1=$_POST['pass1'];
$pass2=$_POST['pass2'];

$result = mysql_query("SELECT * FROM admin WHERE email LIKE '$email'");
$info = mysql_fetch_array($result);

    $pass =$info['pass'];
    
if(!$info)
    {
        echo("Email not valid. Please Try again."); 
        header( "refresh:3;url=update_admin.html" );
        
    }
else
    {
    if($pass1==$pass2 && $opass==$pass)
    {
        
        $sql="UPDATE admin SET pass='$pass1', name='$name', email='$emailnew'  WHERE email='$email'";
        mysql_query($sql,$con);
        mysql_close($con);
      
    
      
     
      
        
 echo" Account Updated. Redirecting ...   ";    
header( "refresh:3;url=teacher.php" );
    }
    
    else
    {
        
        echo("Password Error !!! Please try Again");
header( "refresh:3;url=update_admin.html" );
    }
    
    }
?> 