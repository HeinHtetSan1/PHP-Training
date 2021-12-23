<?php
include 'config.php';
$sql = "select * from stu_tbl";
$result = $conn->query($sql);

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

	<h1> View Student Data</h1>
	<table border="1">
		<tr>
			<th>Name</th>
			<th>Address</th>
			<th>Phone</th>
			<th>Mail</th>
			<th>Total Marks</th>
			<th><a class="btn" href="create.php?id=<?php echo $row['id']; ?>">Create</a></th>
		</tr>

		<?php
		if (mysqli_num_rows($result) > 0) {
			while ($row = mysqli_fetch_array($result)) {



		?>
				<tr>
					<td><?php echo $row['name']; ?></td>
					<td><?php echo $row['address']; ?></td>
					<td><?php echo $row['phone']; ?></td>
					<td><?php echo $row['mail']; ?></td>
					<td><?php echo $row['password']; ?></td>
					<td><a class="btn" href="update.php?id=<?php echo $row['id']; ?>">
							Update</a>&nbsp; &nbsp;<a class="btn" href="delete.php?id=<?php echo $row['id']; ?>">Delete</a></td>
				</tr>
		<?php
			}
		}
		?>

	</table>



</body>

</html>