<?php
$hostname = 'localhost';
$username = 'root';
$password = 'password';
$database = 'TASKDATA';

// Create connection
$conn = new mysqli($hostname, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
