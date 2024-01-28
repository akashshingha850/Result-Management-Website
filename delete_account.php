<?php

include("dbcon.php");
$con = mysql_connect('localhost', 'root', ''); 
$con = mysql_connect("localhost","root","");

    $fpass=$_POST['pass'];
$femail=$_POST['email'];
//$id=mysql_real_escape_string($_POST['email']);
$result = mysql_query("SELECT * FROM login WHERE email LIKE '$femail'"); 
   $info = mysql_fetch_array($result);
    $pass =$info['pass'];
    $name =$info['name'];

    echo "$name";
if(!$info)
    {
        echo("Email not valid. Please Try again."); 
        
header( "refresh:3;url=delete_account.html" );
    }
    
    else 
    {
    if($pass==$fpass)
    {
        $sql="DELETE FROM login WHERE email LIKE '$femail'";

        if (!mysql_query($sql,$con))
            {
                 die('Error: ' . mysql_error());
            }
        echo("Account Deleted. Redirecting to Home.");
        header( "refresh:3;url=home.php" );
    }
    
    else
    {
        
        echo("Password Wrong !!! Please try Again");
header( "refresh:3;url=delete_account.html" );
    }
    
    }


?>
