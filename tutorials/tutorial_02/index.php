<!DOCTYPE html>
<html>
<head>
  <title>Tutorial_02</title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>
  <?php
  $total = 6;
  for ($r = 1; $r <= $total; $r++) {
    for ($space = $total - $r; $space >= 1; $space--) {
      echo " 	&nbsp;";
    }
    for ($star = 1; $star <= 2 * $r - 1; $star++) {
      echo ("*");
    }
    echo "<br>";
  }
  for ($r = $total - 1; $r >= 1; $r--) {
    for ($space = 1; $space <=  $total - $r; $space++) {
      echo " 	&nbsp;";
    }
    for ($star = 1; $star <= 2 * $r - 1; $star++) {
      echo ("*");
    }
    echo "<br>";
  }
  ?>
</body>
</html>