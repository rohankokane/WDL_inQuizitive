<?php 
	include('connect.php');
?>

<!doctype html>
<html lang="en">


<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="css/main.css" />
	<link rel="stylesheet" href="css/header.css" />
	<link rel="stylesheet" href="css/footer.css" />
	<link href="assets/icofont/icofont.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body onload="noBack();" 
    onpageshow="if (event.persisted) noBack();">
	<header>
		<img src="./images/logo-quiz.jpeg" alt="Logo" class="heroLogo">
		<div class="menuToggle">
			<img src="./assets/menu-ham.svg" alt="Open Menu" class="bars">
			<img src="./assets/close-ham.svg" alt="Close Menu" class="cross">
		</div>
		<nav class="navList">
			<ul class="navItems">
				<li><a href="index.php#home" class="active home-link">Home</a></li>
				<li><a href="index.php#about-us" class="about-link">About us</a></li>
				<li><a href="index.php#quizzes" class="quiz-link">Quizzes</a></li>
				<li><a href="index.php#contact-us" class="contact-link">Contact Us</a></li>
			</ul>
		</nav>
	</header>

	<div class="main bg-img">
		<div class="section-form" id="contact-us">
			<p class="heading-center">Welcome!</p>
			<p class="content-center">Let's get started...<br>We'll need your details to provide you with a certificate</p><br><br>
			<div class="text-img">
				<div class="card">
					<form method="POST" action="register.php">
						<div class="form-group">
						<p class="head">Participant Details</p>
						<label for="age">Name:</label>
							<input type="text" placeholder="Your Name" autocomplete="off" value="" name="name" required>
							<br>
							<label for="age">E-mail:</label>
							<input type="email" placeholder="E-mail ID" autocomplete="off" value="" name="email" required><br>
							<label for="age">Contact Number:</label>
							<input type="contact" placeholder="Contact" autocomplete="off" value="" name="contact" pattern="[6-9]{1}[0-9]{9}"><br>
							<div class="age-org">
								<div id="org">
									<label for="org_name" class="ao-label">Organization Name:</label>
									<input type="text" class="ao-label" placeholder="Organization" autocomplete="off" value=""
										name="clgname"><br>
								</div>
								<div>
									<label for="age" class="ao-label">Age:</label>
									<input type="number" class="ao-label" placeholder="Age" autocomplete="off" value="" name="age"><br>
								</div>	
							</div>
							<button type="submit" class="btn submit-btn" id="submit" name="submit">Submit</button>
						</div>
					</form>
				</div>
			</div>
		</div>


	</div>

	<footer>
		<div class="footer-container">
			<div class="footer-row socialMedia" data-aos="fade-up">
				<a href="" class="soc insta" target="_blank"><i class="icofont-instagram"></i></a>
				<!-- <button class="soc insta"><i class="icofont-instagram"></i></button> -->
				<a href="" class="soc linkedIn"><i class="fa fa-linkedin"></i></a>
				<a href="" class="soc fb"><i class="icofont-facebook"></i></a>
				<a href="" class="soc twitter" target="_blank"><i class="icofont-twitter"></i></a>
			</div>
			<div class="footer-row footernav">
				<ul class="footer-navList" data-aos="fade-up">
					<li class="footer-navItem"><a href="#home">Home</a></li>
					<li class="footer-navItem"><a href="#about-us">About us</a></li>
					<li class="footer-navItem"><a href="#quizzes">Quizzes</a></li>
					<li class="footer-navItem"><a href="#contact-us">Contact Us</a></li>
				</ul>
			</div>
			<div class=" footer-row dash"></div>
			<div class=" footer-row copyright"> <span>©2020 Quiz Portal</span>. All Rights Reserved </div>
		</div>

	</footer>

	<script src="./js/main.js"></script>
	<SCRIPT type="text/javascript">
    window.history.forward();
    function noBack() { window.history.forward(); }
</SCRIPT>
</body>

</html>