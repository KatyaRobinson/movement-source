<?php 
$servername = "localhost";
$username = "katya";
$password = "p@ssw0rd";
$database = "movement-source";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>