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
		<h1>Register Form</h1>
		<table>
			<form action="" method="GET">
				<tr>
					<td><label for="email">Email</label></td>
					<td><input type="email" name="email"></td>
				</tr>
				<tr>
					<td><label for="password">Password</label></td>
					<td><input type="password" name="password"></td>
				</tr>
				<tr>
					<td>
						<input type="submit" name="register" value="register">
					</td>
				</tr>



			</form>
		</table>
	</div>
</body>

</html>

<?php
include "config.php";
if (isset($_GET['register'])) {
	$email = $_GET['email'];
	$password = $_GET['password'];
	$sql1 = "SELECT email FROM login where email='$email'";
	$query = $conn->query($sql1);
	$row = mysqli_fetch_array($query); {
		$sqlemail = $row['email'];

		if ($email != $sqlemail) {
			$sql = "INSERT INTO login (email,password) VALUES ('$email','$password')";
			$result = $conn->query($sql);


			echo "Register successfully";
			header("location: index.php");
		} else {
			echo "Your email finished register. Please  insert  another email!";
		}
	}
	$conn->close();
}

?>