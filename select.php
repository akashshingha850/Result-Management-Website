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
$result = mysql_query("SELECT * FROM semister");
if(mysql_fetch_array($result)==0)
{
    echo(" Table  is empty. Please add data.");
    die();
    
    
}
 
else
{
    
$result = mysql_query("SELECT * FROM semister");

echo "<table border='1'>
<tr>
<th>Roll</th>
<th>Name</th>
<th>Bangla</th>
<th>English</th>
<th>Math</th>
<th>Science</th>
<th>Religion</th>
<th>GPA</th>
</tr>";

while($row = mysql_fetch_array($result))
  {
  echo "<tr>";
 
  echo "<td>" . $row['Roll'] . "</td>"; 
  echo "<td>" . $row['Name'] . "</td>";
  echo "<td>" . $row['Bangla'] . "</td>";
  echo "<td>" . $row['English'] . "</td>";
  echo "<td>" . $row['Math'] . "</td>";
  echo "<td>" . $row['Science'] . "</td>";
  echo "<td>" . $row['Religion'] . "</td>";
  echo "<td>" . $row['GPA'] . "</td>";
  echo "</tr>";
      
  }
echo "</table>";
}

mysql_close($con);
?>