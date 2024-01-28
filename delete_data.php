<!DOCTYPE html>
<html>
<head>
    <title> Result Panel</title>
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
         <span id="login-page"> 

<?php
include("dbcon.php"); 
$con = mysql_connect('localhost', 'root', ''); 
$con = mysql_connect("localhost","root","");

if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }


$r=$_POST['Roll'];


$result = mysql_query("SELECT * FROM semister WHERE Roll='$r'"); 
$info = mysql_fetch_array($result);
$Roll =$info['Roll']; 
 if ($r!=$Roll)
    {
        echo(' The roll was not found.Try again !!  ');
      header( "refresh:3;url=update_check.php" );
      die();
    }


$sql="DELETE FROM semister WHERE Roll=$r";

if (!mysql_query($sql,$con))
  {
  echo(' The roll you entered was not valid. Try again !!  ');
      header( "refresh:3;url=delete_data.html" );
      die();
  }
else if(mysql_query($sql,$con))
{
echo(" entry of $r has been deleted. Redirecting to Result Panel");
header( "refresh:2;url=teacher.php" );
    }



mysql_close($con)
?> </span>
      </div>
   
    </div>



</body>
</html>
