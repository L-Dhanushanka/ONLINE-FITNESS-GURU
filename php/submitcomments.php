<?php
	include_once 'config.php';

	$Email = $_POST["email"];
	$First_name =$_POST["firstname"];
	$Last_name = $_POST["lastname"];
	$Subject = $_POST["subject"];
	$Comments = $_POST["comments"];
	
	$sql = "insert into comment(Email, First_name, Last_name, Subject, Comments)values('$Email','$First_name','$Last_name','$Subject','$Comments')";

		if(mysqli_query($conn,$sql))
		{
			echo"<script>alert('Record inserted successfull!!!')</script>";
			header("Location:contact us.html");
			
		}
		else{
			echo "<script>alert ('Error in inserting records')</script>";
		}
		mysqli_close($conn);
?>