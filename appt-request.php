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
echo "Connected successfully";


$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$message = $_POST['message'];
$date = $_POST['date'];
$time = $_POST['time'];

$sql = "INSERT INTO apptrequests (name, phone, email, message, apptdate, appttime)
		VALUES ('$name', '$phone', '$email', '$message', '$date', '$time')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
