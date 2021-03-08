<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kenyapolice";

$conn = new mysqli("localhost","root","","kenyapolice");

if(!$conn){
    echo "Database connection Failed";
}

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$number = $_POST['number'];
$country = $_POST['country'];
$city = $_POST['city'];
$address = $_POST['address'];
$state = $_POST['state'];
$job = $_POST['job'];
$crime = $_POST['crime'];
$time = $_POST['time'];

$sql = "INSERT INTO add1 (fname,lname,age,gender,email,number,country,city,address,state,job,crime,time)
 VALUES ('$fname','$lname','$age','$gender','$email','$number','$country','$city','$address','$state','$job','$crime','$time')";

$result = mysqli_query($conn, $sql);

if ($result) {
    echo "<span>Added Successfully!!</span>";
}

else {
    echo "Failed to add";
}

?>
