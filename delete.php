<?php


include("dbcon.php"); 
$femail="$_POST[email]";
$fpass2="$_POST[pass]";


$sql="DELETE FROM login WHERE email LIKE '$femail'";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "1 record deleted";

mysql_close($con)
?>