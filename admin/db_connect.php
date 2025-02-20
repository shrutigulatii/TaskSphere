<?php
$servername = "localhost";
$username = "root";
$password = ""; // Keep empty if there's no password
$database = "event_db";
$port = 3307; // Add the port

// Create connection
$conn = new mysqli($servername, $username, $password, $database, $port);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
