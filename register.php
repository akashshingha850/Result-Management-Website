<?php
include("dbcon.php"); 

$pass1="$_POST[pass1]";
$pass2="$_POST[pass2]";
$name="$_POST[name]";
$email="$_POST[email]";
$roll="$_POST[roll]";

$id=$_POST['email'];
//$id=mysql_real_escape_string($_POST['email']);
$result = mysql_query("SELECT * FROM login WHERE email LIKE '$id'"); 
   $info = mysql_fetch_array($result);
    $mail =$info['email'];


if($email==$mail)
    {
        echo("Email already exist. Please use Another Email ."); 
        header( "refresh:3;url=register.html.php" );
    }

else{
    



if($pass1==$pass2 && $name!=null && $email!= null && $pass1!= null )
{
$sql="INSERT INTO login ( name,roll,email,pass)
VALUES
('$_POST[name]','$_POST[roll]','$_POST[email]','$_POST[pass1]')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }


  echo("Registration completed.");
header( "refresh:2;url=login.html.php" );
}
else
{
    echo "Resigration Failed. Please try again";
    header( "refresh:2;url=register.html.php" );
}
    
}
mysql_close($con)
?>
