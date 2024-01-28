<?php

session_start();
if($_SESSION)
{
$name=$_SESSION["name"];
$wel= 'welcome  ';
}
else 
{ $name=null;
    $wel= null;
}
?>



<!DOCTYPE html>
<html>
<head>
<style>
body {margin:0;}

.topnav {
  overflow: hidden;
  background-color: rgba(31, 31, 31, 0.69);
}

.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
    font-family: arial;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav .icon {
  display: none;
}
    
    .text{
        float:right; 
        color:white;
      
        font-family: monospace;
        margin-right: 10px;
        font-size: 15px;
        
    }

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }

}
</style>
</head>
<body>

<div class="topnav" id="myTopnav">
  <a href="student.php">Result Panel</a>
  <a href="update_pass.html">Update Account</a>
  <a href="delete_account.html">Delete Account</a>
  <a href="contact_stu">Contact</a>
  <a href="logout.php">Log Out</a>
  <p class="text" ><?php  echo $wel , $name ?></p>
    
  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>

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

</body>
</html>
