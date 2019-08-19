<?php
include('adminlogin.php'); // Includes Login Script
if(isset($_SESSION['login_user'])){
header("location: adminprofile.php"); // Redirecting To Profile Page
}
?> 
<!DOCTYPE html>
<html>
<head>
  <title>Login Form in PHP with Session</title>
  <link href="style.css" rel="stylesheet" type="text/css">
</head>
<body style="background-color:powderblue;">
<center>
<div id="login" >
  <h2>Admin Login </h2>
  <form action="" method="post">
   <label>UserName :</label>
   <input id="name" name="username" placeholder="adminname" type="text">
   <label>Password :</label>
   <input id="password" name="password" placeholder="password" type="password"><br><br>
   <input name="submit" type="submit" value=" Login ">
   <span><?php if($error1)echo $error1; 
                             ?></span>
							 
  </form>
</div>
</center>
</body>
</html>