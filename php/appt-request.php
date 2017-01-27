<?php
reguire 'connection.php';
$name = $_POST['cust-name'];
$phone = $_POST['cust-phone'];
$email = $_POST['cust-email'];
$message = $_POST['cust-message'];

$sql = "INSERT INTO movement-source.app-requests (name, phone-num, email, message)
		VALUES $name, $phone, $email, $message ";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
