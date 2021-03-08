<?php

session_start();
$servername="localhost";
$username="root";
$password="";
$dbname="kenyapolice";
$conn= mysqli_connect($servername,$username,$password,$dbname);

	if (isset($_POST['submit'])){

		$username=$_POST['user'];
		$password=$_POST['pass'];

		$sql="select * from admin where username='$username' && password='$password'";
		$result=mysqli_query($conn,$sql);
		$num=mysqli_num_rows($result);

		if($num==1){	
			$_SESSION['user']=$username;
			header('location:welcome.html');


		}
		else{
			echo"Username or Password is Invalid!";
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login</title>
	
	<style>
		.login{
			width: 360px;
			margin: 50px auto;
			font-family: Arial,san-serif;
			border-radius: 10px;
			border: 2px solid #ccc;
			padding: 10px 40px 10px;
			margin-top: 70px;
		}
		input[type=text], input[type=password]{
			width: 99%;
			padding: 10px;
			margin-top: 10px;
			border: 1px solid #ccc;
			padding-left: 5px;
			font-size: 16px;
			font-family: Arial;
		}
		input[type=submit]{
			width: 100%;
			background-color: #009;
			color: #fff;
			border: 2px solid #06F;
			padding: 10px;
			font-size: 20px;
			cursor: pointer;
			border-radius: 5px;
			margin-bottom: 20px;
			margin: 15px;
		}
	</style>
</head>
<body>
	<div class="login">
<h1 align="center">Login</h1>
<form action="" method="POST" style="text-align: center;">
	<input type="text" name="user" placeholder="Enter Username" id="user" required><br>
	<td><input type="password" name="pass" placeholder="Enter Password" id="pass" required><br></td>
	<input type="submit" name="submit" value="Login">
	<span><?php $error; ?></span>
</form>
</div>
</body>
</html>