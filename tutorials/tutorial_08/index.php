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
	<script src="/js/package/dist/chart.js"></script>
	<link rel="stylesheet" href="style.css">

</head>

<body>
	<div class="view">

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
	</div>
	<?php

	$sql = "SELECT name,password FROM stu_tbl";
	$result = $conn->query($sql);
	foreach ($result as $data) {
		$name[] = $data['name'];
		$password[] = $data['password'];
	}

	?>
	<div class="graph">
		<canvas id="myChart"></canvas>
	</div>
	<script>
		var ctx = document.getElementById('myChart').getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'bar',
			data: {
				labels: <?php echo json_encode($name) ?>,
				datasets: [{
					label: 'Total Marks',
					data: <?php echo json_encode($password) ?>,
					backgroundColor: [
						'rgba(255, 99, 132, 0.2)',
						'rgba(54, 162, 235, 0.2)',
						'rgba(255, 206, 86, 0.2)',
						'rgba(75, 192, 192, 0.2)',
						'rgba(153, 102, 255, 0.2)',
						'rgba(255, 159, 64, 0.2)'
					],
					borderColor: [
						'rgba(255, 99, 132, 1)',
						'rgba(54, 162, 235, 1)',
						'rgba(255, 206, 86, 1)',
						'rgba(75, 192, 192, 1)',
						'rgba(153, 102, 255, 1)',
						'rgba(255, 159, 64, 1)'
					],
					borderWidth: 1
				}]
			},
			options: {
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero: true
						}
					}]
				}
			}
		});
	</script>

</body>

</html>