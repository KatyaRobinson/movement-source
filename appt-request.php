<?php

include("config.php");


$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$message = $_POST['message'];
$date = $_POST['date'];
$time = $_POST['time'];
$sql = "INSERT INTO apptrequests (name, phone, email, message, apptdate, appttime)
        VALUES ('$name', '$phone', '$email', '$message', '$date', '$time')";

	$to = "katya.gurina@yahoo.com"; // owner's email address
    $from = $_POST['email']; // sender's Email address
    $subject = "Form submission";
    $message = $_POST['name'] . " wrote the following:" . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    mail($to,$subject,$message,$headers);
     
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();
?>
