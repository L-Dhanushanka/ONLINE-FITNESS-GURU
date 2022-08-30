<?php
	include_once 'config.php';
?>

<?php
	$registrationNo = $_POST["registration"];
	$firstName = $_POST["firstname"];
	$lastName = $_POST["lastname"];
	$package = $_POST["package"];
	$trainer = $_POST["trainer"];
	$description = $_POST["subject"];
	
	$sql = "insert into feedback(Registration_No, first_name, last_name, package, Trainer, description)values('$registrationNo', '$firstName','$lastName', '$package', '$trainer', '$description')";

	if(mysqli_query($conn,$sql)){
		echo "<script>alert('Record inserted successfully!!!')</script>";
		header("Home_Page.html");
	}
	else{
		echo "<script>alert ('Error in inserting records')</script>";
	}
	
	mysqli_close($conn);
?>