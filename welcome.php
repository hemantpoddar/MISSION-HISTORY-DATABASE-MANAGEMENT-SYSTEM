<html>
<head>
<title>Database Record</title>
</head>
<body style="background-color:powderblue;">

<?php
$con=mysqli_connect("localhost","root","","mission_history");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  $name=$_POST["name"];
$result = mysqli_query($con,"SELECT * FROM mission WHERE Name='$name'");
$count=mysqli_num_rows($result);
?>
<center> <h2>Mission Record</h2> 
<?php
if($count==0)
	echo "No Such Missile exist";?>
</center>
<?php 
 while($row = mysqli_fetch_array($result))
  {?>
<center>

    Name:<?php echo $row['Name'];?></br>
    Date:<?php echo $row['Date'];?></br>
    Place:<?php echo $row['Place'];?></br>
    Range Of Missile:<?php echo $row['Range_Of_Missile'];?></br>
    Length Of Missile:<?php echo $row['Length_Of_Missile'];?></br>
	Altitude Of Missile:<?php echo $row['Altitude'];?></br>
	Time Of Flight:<?php echo $row['Time_Of_Flight'];?></br>
	Flight Azimuth:<?php echo $row['Flight_Azimuth'];?></br>
	Coverage Of Radar R1:<?php echo $row['Radar_R1_Coverage'];?></br>
	Coverage Of Radar R2:<?php echo $row['Radar_R2_Coverage'];?></br>
	Coverage Of Radar R3:<?php echo $row['Radar_R3_Coverage'];?></br>
	Coverage Of Radar R4:<?php echo $row['Radar_R4_Coverage'];?></br>
	Coverage Of Radar R5:<?php echo $row['Radar_R5_Coverage'];?></br>
	Coverage Of EOTS E1:<?php echo $row['EOTS_E1_Coverage'];?></br>
	Coverage Of EOTS E2:<?php echo $row['EOTS_E2_Coverage'];?></br>
	Coverage Of EOTS E3:<?php echo $row['EOTS_E3_Coverage'];?></br>
	Coverage Of EOTS E4:<?php echo $row['EOTS_E4_Coverage'];?></br>
	Coverage Of EOTS E5:<?php echo $row['EOTS_E5_Coverage'];?></br>
	Coverage Of TM T1:<?php echo $row['TM_T1_Coverage'];?></br>
	Coverage Of TM T2:<?php echo $row['TM_T2_Coverage'];?></br>
	Coverage Of TM T3:<?php echo $row['TM_T3_Coverage'];?></br>
	Coverage Of TM T4:<?php echo $row['TM_T4_Coverage'];?></br>
	Coverage Of TM T5:<?php echo $row['TM_T5_Coverage'];?></br>
    Type:<?php echo $row['Type'];?></br>
	
	</center>
	<?php
  }?>
</body>
</html>