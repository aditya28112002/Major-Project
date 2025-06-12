<?php
$host = "localhost";         // XAMPP default
$dbname = "u647487628_servicecare";     // your database name
$username = "u647487628_adikha";          // XAMPP default username
$password = "Adikha@3003";              // XAMPP default password (empty)

$conn = new mysqli($host, $username, $password, $dbname );

// Check connection
if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}
?>
