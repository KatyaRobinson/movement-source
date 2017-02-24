<?php

include("../config.php");

$id = $_POST['apptid'];
$status = $_POST['status'];

$sql = "UPDATE apptrequests SET status = $status WHERE apptid = $id";
     
if ($conn->query($sql) === TRUE) {
    echo "Record deleted";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();
?>
