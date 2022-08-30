<?php
	include_once 'config.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>FitnessGuru Online Fitness Trainer</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../styles/project.css">
	<script src="../js/project.js"></script>
</head>
<body>

<img src="../images/logo1.jpg" width="200" height="200" class="logo">

<li class="login1"><a href="login.html">Login</a></li>

<li class="signup1"><a href="signup.html">Sign Up</a></li>


<center>
	<h2 id="fitness">ONLINE FITNESS TRAINER</h2>
</center>

<br/><br/><br/>

<hr class="new1">

<ul class="menu">
	<li class="menu"><a href="#">Home</a></li>
	<li class="menu"><a href="workoutplans.html">Workout Plans</a></li>
	<li class="menu"><a href="Training_staff_members.html">Trainers</a></li>
	<li class="menu"><a href="aboutUs.html">About Us</a></li>
	<li class="menu"><a href="aboutUs.html">Contact Us</a></li>
	<li class="menu1"><a href="aboutUs.html">My Account</a></li>
</ul>
<br/><br/>

<center>
      <h1> Customer's Feedbacks </h1>
 </center>

<table border = "4" width = "100%">
	     <tr>
		 </tr>
		 
		  <table border = "4" width = "100%">
	     <tr>
			<th> Registration Number</th>
		    <th> First Name </th>
		    <th> Last Name </th>
			<th> Package </th>
			<th> Trainer's Name </th>
			<th> Description </th>
		 </tr>
		 
		 <?php
		 $sql = "select * from feedback";
		 $result = $conn->query($sql);
		 
		 if($result->num_rows>0){
			 
			 while($row=$result->fetch_assoc()){
				 echo"<tr><td>".$row["Registration_No"]."</td><td>".$row["first_name"]."</td><td>".$row["last_name"]."</td><td>".$row["package"]."</td><td>".$row["Trainer"]."</td><td>".$row["description"];
			 }
			 
		 }
		 else{
			 echo"0 results";
		 }
		 echo "</table>";
		 
		 $conn->close();
		 
		 ?>

<br><br>
<form action="deleteFeedback.php">
<input type="submit" value="Delete all feedbacks">
</form>
<footer class="footer-distributed">

			<div class="footer-left">

				<h3>Fitness<span>Guru</span></h3>

				<p class="footer-links">
					<a href="#" class="link-1">Home</a>
					
					<a href="#">Workout Plans</a>
				
					<a href="#">Trainers</a>
				
					<a href="#">About Us</a>
					
					<a href="#">Faq</a>
					
					<a href="#">Contact Us</a>
				</p>

				
			</div>

			<div class="footer-center">

				<div>
					<i class="fa fa-map-marker"></i>
					<p><span>324, George Street,</span> Colombo</p>
				</div>

				<div>
					<i class="fa fa-phone"></i>
					<p>011486781</p>
				</div>

				<div>
					<i class="fa fa-envelope"></i>
					<p><a href="mailto:support@fitnessguru.com">support@fitnessguru.com</a></p>
				</div>

			</div>

			<div class="footer-right">

				<p class="footer-company-about">
					<span>About FitnessGuru</span>
					FitnessGuru is an online fitness platform that helps you to be healthy and strong.
				</p>

				<br/>
				
					<a href="https://www.facebook.com/"><i class="facebook">Facebook</i></a><br/>
					<a href="https://www.twitter.com/"><i class="twitter">Twitter</i></a><br/>
					<a href="https://www.linkedin.com/"><i class="linkedin">Linkedin</i></a><br/>
					<a href="https://www.github.com/"><i class="github">Github</i></a><br/>

			</div>

		</footer>

</body>
</html>
