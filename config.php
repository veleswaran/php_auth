<?php
$servername = "localhost";
$username = "root"; // Your MySQL username
$password = "admin123"; // Your MySQL password
$dbname = "authenticate_php";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
