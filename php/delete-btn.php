<?php

include("../config.php");

$id = $_POST['apptid'];


$sql = "DELETE FROM apptrequests WHERE apptid = $id";
     
if ($conn->query($sql) === TRUE) {
    echo "Record deleted";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();
?>
