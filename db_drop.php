
            <?php
include("dbcon.php"); 
// drop database
$conf=$_POST['pass'];
             if($conf!='yes')
             {
                 echo " Wrong Password . Try Again";
                 header( "refresh:2;url=delete_database.html" );
                 die();
             }
             
if (mysql_query("DROP DATABASE result",$con))
  {
  echo "Database Dropped. Redirecting to Result Panel";
  header( "refresh:2;url=teacher.php" );
  }
else
  {
  echo "There is no database to drop ";
      header( "refresh:2;url=teacher.php" );
  }

mysql_close($con);
?>