<?php
include("dbcon.php"); 



// when no database found
$sql=mysql_select_db('result', $con);
if(!$sql)
{
    echo(" There is no Database. Add a database first");
    die();
}


// when database found but no table 
$sql = "SHOW TABLES";
$res = mysql_query($sql);
$num_tables = mysql_num_rows($res); 

if($num_tables==0)
{  
    echo" There is a database.";
    echo "\n But there is no Table. Add a Table first to add data.";
    die();
}


//database and table exist but no data
$result = mysql_query("SELECT * FROM login");
if(mysql_fetch_array($result)==0)
{
    echo("Student Account Table is empty.");
    die();
    
    
}
 
else
{
    
$result = mysql_query("SELECT * FROM login");

echo "<table border='1'>
<tr>
<th>Name</th>
<th>Roll</th>
<th>Email</th>
<th>Password</th>
</tr>";

while($row = mysql_fetch_array($result))
  {
  echo "<tr>";
 
  echo "<td>" . $row['name'] . "</td>";
  echo "<td>" . $row['roll'] . "</td>"; 
  echo "<td>" . $row['email'] . "</td>";
  echo "<td>" . $row['pass'] . "</td>";
  
  echo "</tr>";
      
  }
echo "</table>";
}

mysql_close($con);
?>