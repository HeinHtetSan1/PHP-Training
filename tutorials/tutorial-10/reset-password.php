<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Reset Password In PHP MySQL</title>
</head>
<body>

	<h1>Change Password Form</h1>
	
<?php
if($_GET['key'])
{
include "config.php";
$email = $_GET['key'];
$sql = "SELECT * FROM login WHERE email='" . $email . "'";
	$result = $conn->query($sql);
if (mysqli_num_rows($result) > 0) {
$row= mysqli_fetch_array($result);
?>
<form action="update-forget-password.php" method="post">
<input type="hidden" name="email" value="<?php echo $email;?>">
<table >
	<tr>
		<td><label for="exampleInputEmail1">Password</label></td>
		<td><input type="password" name='password'></td>
	</tr>
    <tr>
		<td><label for="exampleInputEmail1">Confirm Password</label></td>
		<td><input type="password" name='cpassword'></td>
	</tr>
    <tr>
		<td><input type="submit" name="new-password" value="change"></td>
	</tr>
           

</table>


</form>

<?php }} 
?>

</body>
</html>