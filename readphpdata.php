<?php
$servername = "localhost";
$username = "id1061440_soil";
$password = "soilanalysis";
$dbname = "id1061440_soil_data";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM potdata";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Sr. No. " . $row["Sr.No."]. " ";
    }

echo "|";

$sql = "SELECT * FROM potdata";

$result = $conn->query($sql);

if ($result->num_rows > 0) {

    // output data of each row

    while($row = $result->fetch_assoc()) {

        echo "Voltage " . $row["Voltage"]. " ";

    }
} 


$conn->close();
?>	