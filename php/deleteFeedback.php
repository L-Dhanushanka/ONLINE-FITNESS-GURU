<?php
	include_once 'config.php';
?>

<?php

$sql = "DELETE FROM feedback";

if(mysqli_query($conn,$sql)){
		echo "<script>alert('Records deleted successfully!!!')</script>";
		header("Home_Page.html");
	}
	else{
		echo "<script>alert ('Error in inserting records')</script>";
	}

mysqli_close($conn);

?>

