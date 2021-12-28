<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="com-form">
	<h1>Login Form</h1>
	<table >

	<form action="" method="GET" >

	<tr>
		<td><label for="email">Email</label></td>
		<td><input type="email" name="email"></td>
	</tr>
	<tr>
		<td><label for="password">Password</label></td>
		<td><input type="password" name="password"></td>
	</tr>
	<tr>
		<td><input type="submit" name="login" value="login"></td>
		<td><a href="reset.html">Reset Password URL</a></td>
	</tr>
	</form>
</body>
</html>

<?php
include "config.php";
if(isset($_GET['login'])){
	$email=$_GET['email'];
	$password=$_GET['password'];
	$sql="SELECT email,password FROM login where email='$email'";
	$result=$conn->query($sql);

	if (mysqli_num_rows($result) >0) {
		while ($row = mysqli_fetch_array($result)) {

			$sqlemail = $row['email'];
			$sqlpassword = $row['password'];
		}
		if ($email==$sqlemail && $password==$sqlpassword){
			header("location: view.php");
		}
	else{
		echo "Error:";
	
	}
}
}

?>