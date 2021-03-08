<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kenyapolice";

$conn = new mysqli("localhost","root","","kenyapolice");
if (!$conn) {
    echo "Database connection Failed";
}
$id = $_POST['id'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];

$sql = "UPDATE add1 SET id='$id', fname = '$fname', lname = '$lname', email = '$email' WHERE id='$id'";

if (mysqli_query($conn, $sql)) {
    echo "Record updated successfully";
    header("Location: display.php");
} else {
    echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>