    <?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

// Create database
if (mysql_query("CREATE DATABASE result",$con))
  {
  echo "Database created. Redirecting to Result Panel";
       header( "refresh:2;url=teacher.php" );
  }
else
  {
  echo " Database already exist. Please add  data." ;
       header( "refresh:2;url=teacher.php" );
  }

//table for login
$con = mysql_connect("localhost","root","");
mysql_select_db("result", $con);
$sql2 = "CREATE TABLE login
(
name varchar(30),
roll int,
email varchar(30),
pass varchar(30)
)";
mysql_query($sql2,$con);
mysql_close($con);


//table for semister
$con = mysql_connect("localhost","root","");
mysql_select_db("result", $con);
$sql2 = "CREATE TABLE semister
(

Roll int,
Name varchar(15),
Bangla int,
English int,
Math int,
Science int,
Religion int,
GPA float
)";

mysql_query($sql2,$con);
mysql_close($con);

//table for admin login
$con = mysql_connect("localhost","root","");
mysql_select_db("result", $con);
$sql2 = "CREATE TABLE admin
(
name varchar(30),
email varchar(30),
pass varchar(30)
)";


mysql_query($sql2,$con);
mysql_close($con);

?>

<?php
include("dbcon.php");

$sql="INSERT INTO admin ( name,email,pass)
VALUES
('Admin','admin@gmail.com','kuetece')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
mysql_close($con)
?>


