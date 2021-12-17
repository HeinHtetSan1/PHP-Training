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
  <div class="date-form">
    <form action="" method="post">
      <h1>Calculate Age</h1>
      <p>
        <label for=""> Choose Birth Date</label>
        <input type="date" name="dob">
        <input type="submit" name="submit" value="calculate">
      </p>
    </form>
    <?php
    if (isset($_POST["submit"])) {
      $bdate = $_POST['dob'];
      $tdate = date('y-m-d');
	  if (isset($_POST['dob']) && $_POST['dob']!=''){
		$diff = date_diff(date_create($bdate), date_create($tdate));
		echo "You Age is " . $diff->format('%y') . "year.";
	  }
	  else{

	  echo "Choose your born year.";
    }
}
    ?>
  </div>
</body>
</html>