<?php
// config.php
$servername = "localhost";
$username = "u647487628_adikha";  // Your database username
$password = "Adikha@3003";  // Your database password
$dbname = "u647487628_servicecare";  // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
