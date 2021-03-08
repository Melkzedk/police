<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kenyapolice";

$conn = new mysqli("localhost","root","","kenyapolice");

if (!$conn){
    echo "Database connection Failed";
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>display</title>
    <style>
        table{
            border: 1px solid black;
            border-collapse: collapse;
            margin-top: 50px;
        }
        td{
            border: 1px solid black;
            padding: 10px;
        }
    </style>
</head>
<body>
    <center>
<table>
    <tr>
    <?php
$sql = "SELECT id,fname,lname,email,number FROM add1";
$result = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_array($result)) {
    $id = $row['id'];
    $fname = $row['fname'];
    $lname = $row['lname'];
    $email = $row['email'];
    $number = $row['number'];

    echo "<tr><td>".$id."</td><td>".$fname."</td><td>".$lname."</td><td>".$email."</td><td>".$number."</td>
          <td><a href='edit.php?edit=".$id."'>EDIT</a></td><td><a href='delete.php?deleteid=".$id."'>DELETE</a></td></tr>";
}
?>
</tr>
</table>
</center>
</body>
</html>