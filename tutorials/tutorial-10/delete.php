<?php
include "config.php";
if(isset($_GET['id'])){
	$id=$_GET['id'];
	$sql="DELETE FROM stu_tbl WHERE id='$id'";
	$result=$conn->query($sql);
	if ($result == true){
		echo "update successfully";
		header("location: index.php");
	}
	else{
		echo "Error:".$sql."<br>".$conn->error;
	
	}
}
