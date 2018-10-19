
<!DOCTYPE HTML>
<html>

<body>


<?php

$servername = "localhost";

$username = "id1061440_soil";

$password = "soilanalysis";

$dbname = "id1061440_soil_data";

$v1=$_GET["d"];
$v2=$_GET["f"];


// Create connection

$conn = new mysqli($servername, $username, $password,$dbname);


// Check connection
if ($conn->connect_error) 
{    
die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO potdata ( Sr. No., Voltages)
VALUES ('$v1','$v2')";

if ($conn->query($sql) === TRUE) 
{
 echo "New record created successfully";
} 
else 
{   
 echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>