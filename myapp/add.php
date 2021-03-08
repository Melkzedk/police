<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="HandheFriendly" content="true">
<title>Apply</title>
<style>
*{
padding: 0px;
margin: 0px;
}
body{
background: url(image.jpg);
background-size: 100% 700px;
background-repeat: no-repeat;
}
h1{
text-align: center;
padding: 20px;
color: white;
}
.register{
background: #2d85b0;
width: 500px;
margin: 0px 0px 0px 430px;
color: white;
font-size: 18px;
margin-top: 30px;
}
#register{
margin-left: 50px;
}
label{
color: white;
font-family: Arial,sans-serif;
font-size: 18px;
font-style: italic;
}
#name{
width: 300px;

border: none;
border-radius: 3px;
outline: 0px;
padding: 7px;
}
#sub{
width: 200px;
padding: 7px;
font-size: 19px;
font-family: Arial,sans-serif;
font-style: italic;
font-weight: 600;
border: none;
border-radius: 3px;
outline: 0;
}
</style>
</head>
<body>
<div class="register">
<form action="add1.php" id="register" method="POST">
<h1>ADD</h1>
<label>First Name :</label>
<input type="text" name="fname" id="name" placeholder="First Name"><br><br>
<label>Last Name :</label>
<input type="text" name="lname" id="name" placeholder="Last Name"><br><br>
<label>Age :</label>
<input type="text" name="age" id="name" placeholder="Age"><br><br>
<label>Gender :</label>
<input type="radio" name="gender" id="male">Male
<input type="radio" name="gender" id="female">Female
<input type="radio" name="gender" id="others">Others
<br>
<label>Email :</label>
<input type="email" name="email" id="name" placeholder="i.e @gmail.com"><br><br>
<label>Phone Number :</label>
<input type="text" name="number" id="name" placeholder="Mobile Number"><br><br>
<label>Country :</label>
<input type="text" name="country" id="name" placeholder="i.e Kenya"><br><br>
<label>City :</label>
<input type="text" name="city" id="name" placeholder="City"><br><br>
<label>Address :</label>
<textarea name="address" id="name" placeholder="address"></textarea><br><br>
<label>State :</label>
<input type="text" name="state" id="name" placeholder="State"><br><br>
<label>Job :</label>
<input type="text" name="job" id="name" placeholder="Optional">
<br><br>
<label>Crime</label>
<input type="text" name="crime" id="name" placeholder="Statement">
<label>Year/Months/Days/hours</label>
<input type="text" name="time" id="name" placeholder="number of years sentenced">
<br>
<br>
<input type="submit" name="submit"  id="sub">
<span><?php $error ?></span>
</form>
</div>
</body>
</html>