
<?php
$con = mysql_connect('localhost', 'root', '');
if(! $con)
{
  die('Could not connect: ' . mysql_error());
}

$sql = "TRUNCATE TABLE semister";
mysql_select_db( 'result' );
$retval = mysql_query( $sql, $con );
if(! $retval )
{
echo "There is no table to delete";
header( "refresh:2;url=teacher.php" );
    die();
}
echo "Table deleted successfully\n";
echo " Redirecting to Result Panel.";
header( "refresh:2;url=teacher.php" );
die();
mysql_close($conn);
?>  