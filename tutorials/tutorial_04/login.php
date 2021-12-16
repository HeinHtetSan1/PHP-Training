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
  <?php
  session_start();
  $id = $_POST['id'];
  $password = $_POST['password'];
  $_SESSION['id'] = $id;
  $_SESSION['password'] = $password;
  echo "User Id =>" . $_SESSION['id'];
  ?><br>
  <?php
  echo "User Password  =>" . $_SESSION['password'];
  ?><br>
  <div class="logout">
    <a href="logout.php">logout</a>
  </div>
</body>

</html>