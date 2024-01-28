
<html>
<head>
<title> Delete Data </title>
</head>
<body>
<style>
    @import url(css/font.css);
    

.login-page {
  width: 360px;
  padding: 2% 0 0;
  margin: auto;
}
.form {
  position: relative;
  z-index: 1;
  background: #FFFFFF;
  max-width: 360px;
  margin: 0 auto 100px;
  padding: 45px;
  text-align: center;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}
.form input {
  font-family: "Roboto", sans-serif;
  outline: 0;
  background: #f2f2f2;
  width: 100%;
  border: 0;
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 14px;
}
.button1 {
  font-family: "Roboto", sans-serif;
  text-transform: uppercase;
  outline: 0;
  background: #4CAF50;
  width: 100%;
  border: 0;
  padding: 15px;
  color: #FFFFFF;
  font-size: 14px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
}
    
    .button2 {
  font-family: "Roboto", sans-serif;
  text-transform: uppercase;
  outline: 0;
  background: #de0e0e;
  width: 100%;
  border: 0;
  padding: 15px;
  color: #FFFFFF;
  font-size: 14px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
}
.button1:hover,.form button1:active,.form button1:focus {
  background: #43A047;
}
    .button2:hover,.form button2:active,.form button2:focus {
  background: #9b0a0a;
}


body {
  background: rgba(118, 184, 82, 0.51);
  
}
</style>
    
    <div class="login-page">
  <div class="form">
    
    <form class="login-form" action="update_form.php" method="post" >
      <input type="text" placeholder="Student Roll" name="Roll" />
       
        
      <button class="button button1">Update</button>
      
           
       
    
    </form>
      <button class="buttom button2" onclick="location.href='teacher.php';" value="calcel"> Cancel </button> 
  </div>
</div>

</body>
</html>

