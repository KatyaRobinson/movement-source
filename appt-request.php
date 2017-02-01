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

	$to = "katya.gurina@yahoo.com"; // owner's email address
    $from = $email; // sender's Email address
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $name . " wrote the following:" . "\n\n" . $message;
    $message2 = "Here is a copy of your message " . $name . "\n\n" . $message;

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.   
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

    print phpinfo();  

$conn->close();
?>
