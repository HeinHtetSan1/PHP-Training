
<?php
$text = $_POST["text"];
mkdir("$text", 0777, false);
$name = $_FILES["photo"]["name"];
$tmp = $_FILES["photo"]["tmp_name"];
$type = $_FILES["photo"]["type"];
if ($type == "image/jpeg" || $type == "image/png" || $type == "image/gif") {
	move_uploaded_file($tmp, "$text/$name");
	header("location: index.php");
}
?>