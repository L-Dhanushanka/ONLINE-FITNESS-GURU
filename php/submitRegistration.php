<?php
	include_once 'config.php';
?>

<?php
	$fname = $_POST["feild1"];
	$lname = $_POST["feild2"];
	$NIC = $_POST["feild3"];
	$gender = $_POST["feild4"];
	$contactNo = $_POST["feild5"];
	$dOB = $_POST["feild6"];
	$address = $_POST["feild7"];
	$email = $_POST["feild8"];
	
	$sql = "insert into registration(First_name, Last_name, NIC, Gender, ContactNo, DOB, Address, Email)values('$fname','$lname','$NIC','$gender','$contactNo','$dOB','$address','$email')";
	
	if(mysqli_query($conn,$sql)){
		echo "<script>alert('Record inserted successfully!!!')</script>";
		
	}
	else{
		echo "<script>alert ('Error in inserting records')</script>";
	}
	
	mysqli_close($conn);

?>