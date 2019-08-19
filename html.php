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

$result = mysqli_query($con,"SELECT * FROM mission");
?>
<center> <h2>Mission Record</h2> </center>
<table  align="center" border='1px' >
<tr>
<th>Name</th>
<th>Date</th>
<th>Place</th>
<th>Range_Of_Missile</th>
<th>Length_Of_Missile</th>
<th>Altitude</th>
<th>Time_Of_Flight</th>
<th>Flight_Azimuth</th>
<th>Radar_R1_Coverage</th>
<th>Radar_R2_Coverage</th>
<th>Radar_R3_Coverage</th>
<th>Radar_R4_Coverage</th>
<th>Radar_R5_Coverage</th>
<th>EOTS_E1_Coverage</th>
<th>EOTS_E2_Coverage</th>
<th>EOTS_E3_Coverage</th>
<th>EOTS_E4_Coverage</th>
<th>EOTS_E5_Coverage</th>
<th>TM_T1_Coverage</th>
<th>TM_T2_Coverage</th>
<th>TM_T3_Coverage</th>
<th>TM_T4_Coverage</th>
<th>TM_T5_Coverage</th>
<th>Type</th>
</tr>;

<?php 
 while($row = mysqli_fetch_array($result))
  {?>
  <tr>
     <td> <?php echo $row['Name'];?></td>
     <td> <?php echo $row['Date'];?></td>
     <td> <?php echo $row['Place'];?></td>
     <td> <?php echo $row['Range_Of_Missile'];?></td>
     <td> <?php echo $row['Length_Of_Missile'];?></td>
	 <td> <?php echo $row['Altitude'];?></td>
	 <td> <?php echo $row['Time_Of_Flight'];?></td>
	 <td> <?php echo $row['Flight_Azimuth'];?></td>
	 <td> <?php echo $row['Radar_R1_Coverage'];?></td>
	 <td> <?php echo $row['Radar_R2_Coverage'];?></td>
	 <td> <?php echo $row['Radar_R3_Coverage'];?></td>
	 <td> <?php echo $row['Radar_R4_Coverage'];?></td>
	 <td> <?php echo $row['Radar_R5_Coverage'];?></td>
	 <td> <?php echo $row['EOTS_E1_Coverage'];?></td>
	 <td> <?php echo $row['EOTS_E2_Coverage'];?></td>
	 <td> <?php echo $row['EOTS_E3_Coverage'];?></td>
	 <td> <?php echo $row['EOTS_E4_Coverage'];?></td>
	 <td> <?php echo $row['EOTS_E5_Coverage'];?></td>
	 <td> <?php echo $row['TM_T1_Coverage'];?></td>
	 <td> <?php echo $row['TM_T2_Coverage'];?></td>
	 <td> <?php echo $row['TM_T3_Coverage'];?></td>
	 <td> <?php echo $row['TM_T4_Coverage'];?></td>
	 <td> <?php echo $row['TM_T5_Coverage'];?></td>
     <td> <?php echo $row['Type'];?></td>
	 
  </tr>
  <?php
  }
  ?>
</table>
</body>
</html>