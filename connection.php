<?php
$servername = "localhost";
$username = "root";
$password = "Itendswithus@12345";
$dbname = "pixel";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "";
?>
