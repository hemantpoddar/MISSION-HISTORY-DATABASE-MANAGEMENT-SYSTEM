<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mission_history";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
 $Name=$_POST["Name"];
 $Date=$_POST["Date"];
 $Place=$_POST["Place"];
 $Range_Of_Missile=$_POST["Range_Of_Missile"];
 $Length_Of_Missile=$_POST["Length_Of_Missile"];
 $Altitude=$_POST["Altitude"];
 $Time_Of_Flight=$_POST["Time_Of_Flight"];
 $Flight_Azimuth=$_POST["Flight_Azimuth"];
 $Radar_R1_Coverage=$_POST["Radar_R1_Coverage"];
 $Radar_R2_Coverage=$_POST["Radar_R2_Coverage"];
 $Radar_R3_Coverage=$_POST["Radar_R3_Coverage"];
 $Radar_R4_Coverage=$_POST["Radar_R4_Coverage"];
 $Radar_R5_Coverage=$_POST["Radar_R5_Coverage"];
 $EOTS_E1_Coverage=$_POST["EOTS_E1_Coverage"];
 $EOTS_E2_Coverage=$_POST["EOTS_E2_Coverage"];
 $EOTS_E3_Coverage=$_POST["EOTS_E3_Coverage"];
 $EOTS_E4_Coverage=$_POST["EOTS_E4_Coverage"];
 $EOTS_E5_Coverage=$_POST["EOTS_E5_Coverage"];
 $TM_T1_Coverage=$_POST["TM_T1_Coverage"];
 $TM_T2_Coverage=$_POST["TM_T2_Coverage"];
 $TM_T3_Coverage=$_POST["TM_T3_Coverage"];
 $TM_T4_Coverage=$_POST["TM_T4_Coverage"];
 $TM_T5_Coverage=$_POST["TM_T5_Coverage"];
 $Type=$_POST["Type"];
$sql = "INSERT INTO mission (Name,Date,Place,Range_Of_Missile,Length_Of_Missile,Altitude,Time_Of_Flight,Flight_Azimuth,Radar_R1_Coverage,Radar_R2_Coverage,Radar_R3_Coverage,Radar_R4_Coverage,Radar_R5_Coverage,EOTS_E1_Coverage,EOTS_E2_Coverage,EOTS_E3_Coverage,EOTS_E4_Coverage,EOTS_E5_Coverage,TM_T1_Coverage,TM_T2_Coverage,TM_T3_Coverage,TM_T4_Coverage,TM_T5_Coverage,Type)
VALUES ('$Name','$Date','$Place','$Range_Of_Missile','$Length_Of_Missile','$Altitude','$Time_Of_Flight','$Flight_Azimuth','$Radar_R1_Coverage','$Radar_R2_Coverage','$Radar_R3_Coverage','$Radar_R4_Coverage','$Radar_R5_Coverage','$EOTS_E1_Coverage','$EOTS_E2_Coverage','$EOTS_E3_Coverage','$EOTS_E4_Coverage','$EOTS_E5_Coverage','$TM_T1_Coverage','$TM_T2_Coverage','$TM_T3_Coverage','$TM_T4_Coverage','$TM_T5_Coverage','$Type')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>