
<?php
$con = mysql_connect('localhost', 'root', '');
if(! $con)
{
  die('Could not connect: ' . mysql_error());
}
$conf=$_POST['pass'];
if($conf=='yes'){
$sql = "TRUNCATE TABLE login";
mysql_select_db( 'result' );
$retval = mysql_query( $sql, $con );
if(!$retval )
{
echo "There is no table to wipe";
header( "refresh:2;url=wipe_login_table.html" );
    die();
}
echo "Table Wiped.  \n";
echo " Redirecting ....";
header( "refresh:2;url=teacher_login.php" );
die();
mysql_close($conn);
}
else
{
    echo " Input Error . Try Again";
    header( "refresh:2;url=wipe_login_table.html" );
    die();
   
             
}
?>  