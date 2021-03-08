
<!DOCTYPE html>
<html>
    <head>
        <title>Search</title>
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
    <h3>RESULT</h3>
</body>
</html>
<?php
$servername = "localhost";
$username = "root";
$passsword = "";
$dbname = "kenyapolice";

$conn = new mysqli("localhost","root","","kenyapolice");
if (!$conn){
    echo "Database connection failed";
}

if (isset($_POST['search'])) {

    $fname = $_POST['fname'];

    $sql = "SELECT * FROM add1 WHERE fname = '$fname'";
    $res = mysqli_query($conn, $sql);

    while ($row = mysqli_fetch_array($res)) {
        ?>
        <form action="" method="POST">
        <input type="hidden" name = "id" value="<?php echo $row['id']; ?>"/><br>
        <input type="text" name = "fname" value="<?php echo $row['fname']; ?>"/><br>
        <input type="text" name = "lname" value="<?php echo $row['lname']; ?>"/><br>
        <input type="text" name = "email" value="<?php echo $row['email']; ?>"/><br>
        <input type="text" name = "crime" value="<?php echo $row['crime']; ?>"/><br>
        </form>

        <?php
    }
}
?>