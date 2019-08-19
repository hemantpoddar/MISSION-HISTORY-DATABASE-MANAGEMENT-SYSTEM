<html>
<head>
<title> mission</title>
<head>
<body style="background-color:powderblue;">
<center>
<form action="Registration.php" method="post"> 
  Enter Username:<br> 
  <input type="text" name="username"> 
  <br> 
  Enter Password:<br> 
  <input type="password" name="password"> 
  <br><br> 
  <input type="submit" value="register"> 
</form> 
</center>
</body>
</html>
<?php
// Create connection
$conn=new mysqli("localhost","root","","user");
$username='';
$password='';
if (isset($_POST['username'])) {
    $username = $_POST['username'];
}
if (isset($_POST['password'])) {
    $password = $_POST['password'];
}
//$username=$_POST["username"];
//$password=$_POST["password"];
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO login(username,password)
VALUES ('$username','$password')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>