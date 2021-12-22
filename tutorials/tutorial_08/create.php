<?php
include "config.php";

if (isset($_POST['submit'])) {

	$name = $_POST['name'];
	$address = $_POST['address'];
	$phone = $_POST['phone'];
	$mail = $_POST['mail'];
	$password = $_POST['password'];

	$sql = "INSERT INTO stu_tbl (name,address,phone,mail,password) VALUES ('$name','$address','$phone','$mail','$password')";

	$resut = $conn->query($sql);


	if ($resut == true) {
		echo "created successfully";
		header("location: index.php");
	} else {
		echo "Error:" . $sql . "<br>" . $conn->error;
	}
	$conn->close();
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>

<body>
	<h1>Create Form</h1>
	<form action="" method="POST">
		<table>
			<tr>
				<td><label for="Name">Name</label></td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr>
				<td><label for="Address">Address</label></td>
				<td><input type="text" name="address"></td>
			</tr>
			<tr>
				<td><label for="Phone">Phone<label></td>
				<td><input type="text" name="phone"></td>
			</tr>
			<tr>
				<td><label for="mail">Mail</label></td>
				<td><input type="text" name="mail"></td>
			</tr>
			<tr>
				<td><label for="password">Password</label></td>
				<td><input type="text" name="password"></td>
			</tr>
			<tr>
				<td><input type="submit" name="submit" value="Create"></td>
			</tr>
		</table>
	</form>
</body>

</html>