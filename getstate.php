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

if($_GET["color"] != "All")
{
$sql = "SELECT State FROM ledStatus WHERE Color= '".$_GET["color"]."'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo  $row["State"];
    }
} 

}

else
{
  $sql = "SELECT State FROM ledStatus WHERE Color= 'red'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo  $row["State"];
    }
} 

$sql = "SELECT State FROM ledStatus WHERE Color= 'green'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo  $row["State"];
    }
} 

$sql = "SELECT State FROM ledStatus WHERE Color= 'blue'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo  $row["State"];
    }
} 

}
$conn->close();
?>	