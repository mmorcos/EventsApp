<?php
$servername = "sql1.njit.edu";
$username = "bar25_proj";
$password = "bindi123";
$dbname = "bar25_proj";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT name,detail,date,time,location FROM academics";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo  $row["name"]."" . $row["detail"]. " " . $row["date"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>