<?php
session_start(); // Starting Session 
$error1 = ''; // Variable To Store Error Message
$count='';
$conn = mysqli_connect("localhost", "root", "", "admin");
//$sql="SELECT * FROM $tbl_name WHERE username='$username'";
//$result=mysqli_query($sql);
// Mysql_num_row is counting table row
//$count=mysql_num_rows($result);  
if (isset($_POST['submit'])) {	
	if (empty($_POST['username']) || empty($_POST['password'])) { 
		$error1 = "Username or Password is invalid";
         //$conn='';		
	} 
	else{ 
		// Define $username and $password 
		$username = $_POST['username']; 
		$password = $_POST['password']; 
		// mysqli_connect() function opens a new connection to the MySQL server. 
		//$conn = mysqli_connect("localhost", "root", "", "user"); 
		// SQL query to fetch information of registerd users and finds user match. 
		  $query = "SELECT username, password from record where username=? AND password=? LIMIT 1"; 
		  $result=mysqli_query($query);
		  $count=mysqli_num_rows($result);
		
		//... To protect MySQL injection for Security purpose 
		$stmt = $conn->prepare($query); 
		$stmt->bind_param("ss", $username, $password); 
		$stmt->execute(); 
		$stmt->bind_result($username, $password); 
		$stmt->store_result(); 
		if($stmt->fetch()) //fetching the contents of the row { 
			$_SESSION['login_user'] = $username; // Initializing Session 
		header("location: adminprofile.php"); // Redirecting To Profile Page 
	} 
	
	//echo "the value of.....\n\n\n\n\n\n"; echo $y;
	mysqli_close($conn); // Closing Connection 
} 
?>