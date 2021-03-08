<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kenyapolice";

$conn = new mysqli("localhost","root","","kenyapolice");
if (!$conn) {
    echo "Database connection Failed";
}

$getid = $_GET['edit'];

$seledittwo = "SELECT * FROM add1 WHERE id = $getid";
$res = mysqli_query($conn, $seledittwo);

$selet = mysqli_fetch_assoc($res);

$id = $selet['id'];
$fname = $selet['fname'];
$lname = $selet['lname'];
$email = $selet['email'];

?>
<!DOCTYPE html>
<html>
<head>
<title>Update</title>
<style>
body{
    background-color: whitesmoke;
    font-family: Arial;
    text-align: center;
}
input{
    width: 40%;
    height: 5%;
    border: 1px;
    border-radius: 05px;
    padding: 8px 15px 8px 15px;
    margin: 10px 0px 15px 0px;
    box-shadow: 1px 1px 2px 1px grey;
}
</style>
</head>
<body>
<h3>UPDATE HERE</h3>
<form action="update.php" method="POST">
<input type="hidden" name="id" value = "<?php echo $id ?>"/><br>
<input type="text" name="fname" value = "<?php echo $fname ?>"/><br>
<input type="text" name="lname" value = "<?php echo $lname ?>"/><br>
<input type="text" name="email" value = "<?php echo $email ?>"/><br>
<input type="submit" name="Update" value="Update">
</form>
</body>
</html>