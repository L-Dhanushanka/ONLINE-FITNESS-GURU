<!DOCTYPE html>
<html>
<head>
	<title>FitnessGuru Online Fitness Trainer</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
</head>
<body>
<table>
<tr>

<th>Id</th>
<th>Name</th>
<th>Topic</th>
<th>Success Stories</th>
</tr>

<?php
	$con=mysqli_connect("localhost","root","","test");
	if($con->connect_error){
		die("connection failed".$con->connect_error);
	}
	$sql = "SELECT ID,Name,Topic,Success from stories";
	$result=$con->query($sql);
	
	if($result->num_rows>0){
		while($row =$result->fetch_assoc()){
			echo "<tr><td>".$row["ID"]."<tr><td>".$row["Name"]."<tr><td>".$row["Topic"]."<tr><td>".$row["Success"]."</td></td>";
		
		}
		echo"</table>";
	}
	else
	{
		echo"result not found";
	}
	$con->close();
	?>
	
</table>
</body>
</html>