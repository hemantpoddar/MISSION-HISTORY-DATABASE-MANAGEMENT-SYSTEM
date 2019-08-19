<?php
include('adminsession.php'); 
if(!isset($_SESSION['login_user'])){ 
  header("location: adminindex.php"); // Redirecting To Home Page 
}
?>
<!DOCTYPE html>
<html>
<head>
 <title>Your Home Page</title>
 <link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
 <div id="profile">
 <center>
<img src="d1.png" alt="drdo" width="300" height="300">
</br>
</br>
 <b id="welcome">Welcome To DRDO: <i><?php echo $login_session; ?></i></b>
 </br>
 <p>If you want to know Mission Histroy Click here: </P>
 <b id="html"><a href="html.php"><button type="button">Click</button></a></b>
 </br>
 <p>If you want to search a particular Mission Click here </p>
<a href="html1.html"><button type="button">Click</button></a></b>
 <p>If you want to add another missile details Click here </p>
 <a href="Foradding.html"><button type="button">Click</button></a>
 <center>
 <br> 
 <b id="logout"><a href="adminlogout.php">Log Out</a></b> </center>
 </center>
 </div>
</body>
</html>