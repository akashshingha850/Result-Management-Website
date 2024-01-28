
<?php
include("dbcon.php");

$fpass=$_POST['pass'];
$id=$_POST['email'];
$result = mysql_query("SELECT * FROM admin WHERE email LIKE '$id'"); 
$info = mysql_fetch_array($result);
$pass =$info['pass'];
$name =$info['name'];
mysql_query($sql,$con);
mysql_close($con);
?>


<?php
include("dbcon.php");
$fpass2=$_POST['pass'];
$id2=$_POST['email'];
$result2 = mysql_query("SELECT * FROM login WHERE email LIKE '$id'"); 
$info2 = mysql_fetch_array($result2);
$pass2 =$info2['pass'];
$name2 =$info2['name']; 
mysql_query($sql,$con);
mysql_close($con);

?>



<?php 

 if(!$info && !$info2)
    {
        echo("Email not valid. Please Try again."); 
header( "refresh:1;url=login.html.php" );
    }
    
    else 
    {
    if($pass==$fpass)
    {
       
         if( isset( $_POST['check'] ) )
 {   
session_start();
$_SESSION["email"]=$id;
$_SESSION["pass"]=$pass;
$_SESSION["roll"]=$info['roll'];
$_SESSION["name"]=$info['name'];
 }
echo("Login Successful. Welcome $name. Redirecting to Home");       
header( "refresh:0;url=teacher.php" );
    }
        
       else if($pass2==$fpass2)
    {
     
         if( isset( $_POST['check'] ) )
 {   
session_start();
$_SESSION["email"]=$id2;
$_SESSION["pass"]=$pass2;
$_SESSION["roll"]=$info2['roll'];
$_SESSION["name"]=$info2['name'];
$_SESSION["r"]=$info2['roll'];
     
 }
        else{
          session_start();
$_SESSION["r"]=$info2['roll'];
$_SESSION["name"]=null;
            
    }
echo("Login Successful. Welcome $name. Redirecting to Home");       
header( "refresh:0;url=student.php" );
    }

    else
    {
       
        echo("Password Wrong !!! Please try Again");
header( "refresh:2;url=login.html.php" );
    }   
    }
?> 