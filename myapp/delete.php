<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kenyapolice";

$conn = new mysqli("localhost","root","","kenyapolice");

if(!$conn){
    echo "Database connection Failed";
}

$getid = $_GET['deleteid'];

$sql = "DELETE FROM add1 WHERE id = '$getid'";
$result = mysqli_query($conn, $sql);

if($result){
    header("Location: add.php");
}

?>