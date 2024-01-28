<?php
include("dbcon.php"); 
//if(!$_SESSION)
//session_start();
$roll=$_SESSION["r"];


// when no database found
$sql=mysql_select_db('result', $con);
if(!$sql)
{
    echo(" The Result is not Published Yet.");
    die();
}


/* when database found but no table 
$sql = "SHOW TABLES";
$res = mysql_query($sql);
$num_tables = mysql_num_rows($res); 

if($num_tables==0)
{  
    echo(" The Result is not Published Yet.");
    die();
} */


//database and table exist but no data
$result = mysql_query("SELECT * FROM semister");
if(mysql_fetch_array($result)==0)
{
    echo(" The Result is not Published Yet.");
    die();
    mysql_close($con);
    
}
 
else
{
include("dbcon.php");   
$result = mysql_query("SELECT * FROM semister WHERE Roll LIKE '$roll'");
$row = mysql_fetch_array($result);
    if(!$row)
    {
        echo" Your result is not listed.";
            die();
    }
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