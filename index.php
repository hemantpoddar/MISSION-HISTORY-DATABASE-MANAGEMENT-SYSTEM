<?php
include('login.php'); // Includes Login Script
if(isset($_SESSION['login_user'])){
header("location: profile.php"); // Redirecting To Profile Page
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
  <h2>User Login </h2>
  <form action="" method="post">
   <label>UserName :</label>
   <input id="name" name="username" placeholder="username" type="text">
   <label>Password :</label>
   <input id="password" name="password" placeholder="password" type="password"><br><br>
   <input name="submit" type="submit" value=" Login ">
   <a href="Registration.php"><p align="center">Register<p></a>
   <span><?php if($error1)echo $error1; 
                             ?></span>
							 
  </form>
</div>
</center>
</body>
</html>