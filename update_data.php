<!DOCTYPE html>
<html>
<head>
    <link rel="icon" type="image/jpg" href="image/pro.png">
<style>
body {margin:0;}

.container {
    overflow: hidden;
    background-color: #333;
    font-family: Arial;
}

.container a {
    float: left;
    font-size: 16px;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

.dropdown {
    float: left;
    overflow: hidden;
}

.dropdown .dropbtn {
    font-size: 16px;    
    border: none;
    outline: none;
    color: white;
    padding: 14px 16px;
    background-color: inherit;
}

.container a:hover, .dropdown:hover .dropbtn {
    background-color: red;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    float: none;
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {
    background-color: #ddd;
}

.dropdown:hover .dropdown-content {
    display: block;
}
    @import url(css/font.css);
    @import url(css/font-awesome.min.css);

.login-page {
  width: 500px;
  padding: 10% 0 0;
  margin: auto;
}
.form {
  position: relative;
  z-index: 1;
  background: #FFFFFF;
  max-width: 450px;
  margin: 0 auto 100px;
  padding: 45px;
  text-align: center;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}

body {
  background: rgba(118, 184, 82, 0.51);
  
}
</style>
    <script>
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
</script>
    
</head>
<body>

<div class="container" style="float-left" >
    <a href="teacher.php">Result Panel</a>
      <div class="dropdown">
    <button class="dropbtn">Database</button>
    <div class="dropdown-content">
      <a href="db_create.php">Add Database</a>
      <a href="db_drop.php">Drop Database</a>
    </div>
  </div>
    
    <div class="dropdown">
    <button class="dropbtn">Table</button>
    <div class="dropdown-content">
      <a href="add_table.php">Add Table</a>
      <a href="delete_table.php">Delete Table</a>
    </div>
  </div>
    
    <div class="dropdown">
    <button class="dropbtn">Data</button>
    <div class="dropdown-content">
      <a href="add_data.html">Add Data</a>
      <a href="update_check.php">Update Data</a>
      <a href="delete_data.html">Delete Data</a>
    </div>
  </div>
    
  <a href="help.html">Help</a>
  <a href="contact.html">Contact</a>
    <a href="login.html">Logout</a>
  

    
</div>


    <div> <pre>
            
            </pre>  </div>
    <div class="login-page">
        <div class="form">
         <span id="login-page"> <?php
include("dbcon.php"); 


$sql="UPDATE semister SET Name='$_POST[Name]'  WHERE Roll='$_POST[Roll]'";
mysql_query($sql);
$sql="UPDATE semister SET Bangla='$_POST[Bangla]'  WHERE Roll='$_POST[Roll]'";
mysql_query($sql);
$sql="UPDATE semister SET English='$_POST[English]'  WHERE Roll='$_POST[Roll]'";
mysql_query($sql);
$sql="UPDATE semister SET Math='$_POST[Math]'  WHERE Roll='$_POST[Roll]'";
mysql_query($sql);
$sql="UPDATE semister SET Science='$_POST[Science]'  WHERE Roll='$_POST[Roll]'";
mysql_query($sql);
$sql="UPDATE semister SET Religion='$_POST[Religion]'  WHERE Roll='$_POST[Roll]'";

$sub=array("$_POST[Bangla]","$_POST[English]","$_POST[Math]","$_POST[Science]","$_POST[Religion]");
$i=0;$gp=0;

while($i<5)
{
  
    if($sub[$i]>79)
        $gpa=5;
    else if($sub[$i]>69)
        $gpa=4;
    else if($sub[$i]>59)
        $gpa=3.5;
    else if($sub[$i]>49)
        $gpa=3;
    else if($sub[$i]>39)
        $gpa=2.5;
    else if ($sub[$i]>32)
        $gpa=2;
    else
    {
       $gp=0;
         break;
    }
        
        
    
    $gp=$gp+$gpa;
    $i++;
    
}
$gp=$gp/5;

mysql_query($sql);
$sql="UPDATE semister SET GPA=$gp  WHERE Roll='$_POST[Roll]'";


if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "1 record updated. Redirecting to Result Panel";
header( "refresh:3;url=teacher.php" );

mysql_close($con)
?> </span>
      </div>
   
    </div>



</body>
</html>

