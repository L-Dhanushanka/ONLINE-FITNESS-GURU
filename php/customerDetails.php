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
	<script src="../js/myscript.js"></script>
</head>
<body>

<img src="../images/logo1.jpg" width="200" height="200" class="logo">

<li class="login1"><a href="login.html">Login</a></li>

<li class="signup1"><a href="registration.html">Sign Up</a></li>

<center>
	<h2 id="fitness"> ONLINE FITNESS TRAINER </h2>
</center>

<br/><br/><br/>

<hr class="new1">

<ul class="menu">
	<li class="menu"><a href="Home_Page.html">Home</a></li>
	<li class="menu"><a href="videos.html">Videos</a></li>
	<li class="menu"><a href="">Workout Plans</a></li>
	<li class="menu"><a href="">Trainers</a></li>
	<li class="menu"><a href="">About Us</a></li>
	<li class="menu"><a href="">Contact Us</a></li>
	<li class="menu1"><a href="">My Account</a></li>
</ul>
<br/><br/>

<center>
      <h1> Customer profile Details </h1>
 </center>

<table border = "4" width = "100%">
	     <tr>
		 </tr>
		 
		  <table border = "4" width = "100%">
	     <tr>
		    <th> First Name </th>
		    <th> Last Name </th>
			<th> NIC Number </th>
			<th> Gender </th>
			<th> Contact Number </th>
			<th> Date of Birth </th>
			<th> Address </th>
			<th> Email Address </th>
		 </tr>
		 
		 <?php
		 $sql = "select * from registration";
		 $result = $conn->query($sql);
		 
		 if($result->num_rows>0){
			 
			 while($row=$result->fetch_assoc()){
				 echo"<tr><td>".$row["First_name"]."</td><td>".$row["Last_name"]."</td><td>".$row["NIC"]."</td><td>".$row["Gender"]."</td><td>".$row["ContactNo"]."</td><td>".$row["DOB"].$row["Address"].$row["Email"]."</td></tr>";
			 }
			 
		 }
		 else{
			 echo"0 results";
		 }
		 echo "</table>";
		 
		 $conn->close();
		 
		 ?>

<footer class="footer-distributed">

			<div class="footer-left">

				<h3>Fitness<span>Guru</span></h3>

				<p class="footer-links">
					<a href="Home_Page.html" class="link-1">Home</a>
					
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
					<p><a href="mailto:support@company.com">support@fitnessguru.com</a></p>
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
