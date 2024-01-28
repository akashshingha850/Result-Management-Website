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

.containerr {
    overflow: hidden;
    background-color: rgba(51, 51, 51, 0.85);
    font-family: Arial;
}

.containerr a {
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

.containerr a:hover, .dropdown:hover .dropbtn {
    background-color: #727272;
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


.text{
        float:right; 
        color:white;
      
        font-family: monospace;
        margin-right: 10px;
        font-size: 15px;
        
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

<div class="containerr" style="float-left" >
   
    <a href="teacher.php">Result Panel</a>
    
    <div class="dropdown">
    <button class="dropbtn">Data</button>
    <div class="dropdown-content">
      <a href="add_data.html">Add Data</a>
      <a href="update_check.php">Update Data</a>
      <a href="delete_data.html">Delete Data</a>
      <a href="wipe_marks_table.html">Delete All Data</a>
    </div>
  </div>
    
      <div class="dropdown">
    <button class="dropbtn">Admin</button>
    <div class="dropdown-content">
      <a href="update_admin.html">Update Account</a>
      <a href="db_create.php">Add Database</a>
      <a href="delete_database.html">Drop Database</a>
    </div>
  </div>
    
    <div class="dropdown">
    <button class="dropbtn"  >Student Account</button>
    <div class="dropdown-content">
     <a href="teacher_login.php">View Accounts</a>
      <a href="add_account.html">Add Account</a>
      <a href="update_pass.html">Update Account </a>
      <a href="delete_account.html">Delete Account</a>
        <a href="wipe_login_table.html">Delete All Accounts</a>
    </div>
  </div>
    
    
    
  
  <a href="admin_contact.php">Contact</a>
    <a href="logout.php">Logout</a>
    <p class="text" ><?php  echo $wel , $name ?></p>
  

    
</div>


    


</body>
</html>
