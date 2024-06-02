<?php
// Database connection parameters
$servername = "localhost"; // Server name
$username = "root"; // MySQL username (default for XAMPP)
$password = ""; // MySQL password (default for XAMPP)
$dbname = "telecom_subscriber_central"; // Database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
