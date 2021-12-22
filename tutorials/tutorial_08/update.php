<?php
include "config.php";
if (isset($_POST['update'])) {
	$id = $_POST['id'];
	$name = $_POST['name'];
	$address = $_POST['address'];
	$phone = $_POST['phone'];
	$mail = $_POST['mail'];
	$password = $_POST['password'];

	echo $name . $address . $phone . $mail . $password;
	echo "hello";


	$sql = "UPDATE stu_tbl SET name='$name',address='$address',phone='$phone',mail='$mail',password='$password' where id='$id'";

	$resut = $conn->query($sql);


	if ($resut == true) {
		echo "update successfully";
		header("location: index.php");
	} else {
		echo "Error:" . $sql . "<br>" . $conn->error;
	}
}

if (isset($_GET['id'])) {
	$id = $_GET['id'];
	$sql = "SELECT * FROM stu_tbl WHERE id=$id ";

	$result = $conn->query($sql);

	if (mysqli_num_rows($result) > 0) {
		while ($row = mysqli_fetch_array($result)) {

			$id = $row['id'];
			$name = $row['name'];
			$address = $row['address'];
			$phone = $row['phone'];
			$mail = $row['mail'];
			$password = $row['password'];
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
			<h1>Update Form</h1>
			<Form action="" method="post">

				<table>
					<tr>
						<td><label for="Name">Name</label></td>
						<td><input type="text" name="name" value="<?php echo $name; ?>">
							<input type="hidden" name="id" value="<?php echo $id; ?>">
						</td>
					</tr>
					<tr>
						<td><label for="Address">Address</label></td>
						<td><input type="text" name="address" value="<?php echo $address; ?>"></td>
					</tr>
					<tr>
						<td><label for="Phone">Phone<label></td>
						<td><input type="text" name="phone" value="<?php echo $phone; ?>"></td>
					</tr>
					<tr>
						<td><label for="mail">Mail</label></td>
						<td><input type="text" name="mail" value="<?php echo $mail; ?>"></td>
					</tr>
					<tr>
						<td><label for="password">Password</label></td>
						<td><input type="text" name="password" value="<?php echo $password; ?>"></td>
					</tr>
					<tr>
						<td><input type="submit" name="update" value="Update"></td>
					</tr>
				</table>
			</Form>

		</body>

		</html>
<?php
	}
} else {
	header("location: index.php");
}
?>