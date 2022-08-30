<?php
   include_once'config.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title> Trainer Details</title>
	
	<link rel="stylesheet" href="../styles/styles.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<script src="js/myScript.js"> </script>
</head>
<body>

<img src="../images/Fitness-Trainer-Online.jpg" width="200" height="200" class="logo">


<center>
	<h1 id="fitness">ONLINE FITNESS TRAINER</h1>
</center>

<br/><br/><br/>

<hr class="new1">

<ul class="menu">
	<li class="menu"><a href="#">Home</a></li>
	<li class="menu"><a href="../html/Planes Page.html">Workout Plans</a></li>
	<li class="menu"><a href="#">Trainers</a></li>
	<li class="menu"><a href="#">About Us</a></li>
	<li class="menu"><a href="#">Contact Us</a></li>
	<li class="menu1"><a href="../html/User Page.html">My Account</a></li>
</ul>
<br/><br/>

       <div class="typ">
   
       <button class="button"> <a href="../html/addItems.html"> Add New Trainer </a> </button>
       <br> <br>

       <button class="button"> <a href="update.php"> Update Trainer </a> </button>
       <br> <br>

       <button class="button"> <a href="delete.php"> Delete Trainer </a> </button>
       <br> <br>
       </div>



      <div class="productdata" id="tbl" style="border-style:groove; border-color:DarkBlue; background-color:white;">
      <table border="2" width="100%">
      <tr>
           <th> Trainer ID </th> 
           <th> Trainer Name </th>
           <th>  Trainer Age </th> 
           <th> Session </th>
           <th> Description </th>
           
       </tr>
      <?php
       $sql = "select * from item";
       $result = $conn->query($sql);

        if($result-> num_rows> 0) {
           
           while($row=$result->fetch_assoc()){
              echo "<tr><td>".$row["ID_no"]."</td><td>".$row["Name"]."</td><td>".$row["age"]."</td><td>".$row["session"]."</td><td>".$row["description"]."</td><tr>";
              }
          }

         else {
           echo "There is no result to display";
         }

        echo "</table>";
         
        $conn->close();

      ?> 

       </table>
       </div>
       <br>

      <br> <br>

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
					<p><a href="mailto:support@company.com">support@fitnessguru.com</a></p>
				</div>

			</div>

			<div class="footer-right">

				<p class="footer-company-about">
					<span>About FitnessGuru</span>
					FitnessGuru is an online fitness platform that helps you to be healthy and strong.
				</p>

				<div class="footer-icons">

					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-linkedin"></i></a>
					<a href="#"><i class="fa fa-github"></i></a>

				</div>

			</div>

		</footer>

</body>
</html>
