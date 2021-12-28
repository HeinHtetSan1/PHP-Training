

<?php
if (isset($_POST['password']) &&  $_POST['email']) {
	include "config.php";
	$emailId = $_POST['email'];
	echo $emailId;
	$password = $_POST['password'];
	$sql = "UPDATE login SET password='$password' where email='$emailId'";

	$result = $conn->query($sql);
	if ($result == true) {
		echo "update successfully";
		header("location: index.php");
	} else {
		echo "Error:" . $sql . "<br>" . $conn->error;
	}
}
?>