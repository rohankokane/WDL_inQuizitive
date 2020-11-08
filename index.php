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

<body>
	<header>
		<h1 class="heading site-heading">inQuizitive</h1>
		<!-- <img src="./images/logo-quiz.jpeg" alt="Logo" class="heroLogo"> -->
		<div class="menuToggle">
			<img src="./assets/menu-ham.svg" alt="Open Menu" class="bars">
			<img src="./assets/close-ham.svg" alt="Close Menu" class="cross">
		</div>
		<nav class="navList">
			<ul class="navItems">
				<li><a href="#home" class="active home-link">Home</a></li>
				<li><a href="#about-us" class="about-link">About us</a></li>
				<li><a href="#quizzes" class="quiz-link">Quizzes</a></li>
				<li><a href="#contact-us" class="contact-link">Contact Us</a></li>
			</ul>
		</nav>
	</header>

	<div class="main">
		<!-- <p>Welcome To The QUIZ PORTAL!</p> -->
		<div id="home">
			<img class="hero-banner" src="./images/quiz_banner.png">
			<a class="main-button" href="#quizzes">Take Quiz</a></button>
		</div>




		<div class="section"  id="quizzes">
			<div class="text-img">
				<div class="content-div">
					<p class="heading">Quiz</p>
					<P class="content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis cum quos non
						officiis dignissimos aperiam officia vitae libero natus, consequatur exercitationem veniam
						possimus! Asperiores, soluta sit quis iusto reprehenderit recusandae esse molestias at nostrum
						dicta et beatae neque inventore culpa nesciunt impedit.</P><br>
					<p  class="content">Our most recent quiz is the Nutrition Quiz:</p>
					<a href="quiz_form.php" title="Button border purple" class="button btnFloat btnPurple">Attempt Quiz</a>
				</div>
				<img src="./images/nutrition.png">
			</div>
		</div>
		<div class="section" id="about-us">
			<div class="text-img" >
				<!-- <img src="./images/banner1.png"> -->
				<div class="fling-minislide">
					<figure>
						<img src="./images/tday.jpg" alt="Slide 4" />
						<figcaption>Teacher's Day Quiz</figcaption>
					</figure>
					<figure>
						<img src="./images/tiger.png" alt="Slide 3" />
						<figcaption>Tiger Quiz</figcaption>
					</figure>
					<figure>
						<img src="./images/mosquito.jpg" alt="Slide 2" />
						<figcaption>Dengue Malaria prevention: Mosquito Quiz</figcaption>
					</figure>
					<figure>
						<img src="./images/covid.jpg" alt="Slide 1" />
						<figcaption>Covid-19 Awareness Quiz</figcaption>
					</figure>
				</div>



				<div class="content-div">
					<p class="heading">About us</p>
					<P class="content">
						Our main aim is to create awareness regarding some key issues in our society through
						Quizzes.<br>We also provide personalised quizzes for several organisations.<br>These are few of
						our the recently conducted quizzes:<br><br>
						<ul class="content">
							<li>Teacher's Day Quiz</li>
							<li>Tiger Conservation Quiz</li>
							<li >Dengue Malaria prevention: Mosquito Quiz</li>
							<li>Covid-19 Awareness Quiz</li>
						</ul>
					</P>
				</div>
			</div>
		</div>

		<div class="section-form" id="contact-us">
			<p class="heading-center">Contact Us</p>
			<div class="text-img">
				<div class="card">
					<form method="POST">
						<div class="form-group">
							<input type="text" placeholder="Your Name" autocomplete="off" value="" name="name" required>
							<br>
							<input type="email" placeholder="E-mail ID" autocomplete="off" value="" name="e-mail"
								required><br>
							<input type="text" placeholder="Organization Name" autocomplete="off" value=""
								name="org_name" required><br>
							<textarea rows="5" placeholder="Your Message" autocomplete="off" name="message"
								required></textarea><br>
							<button type="submit" class="btn btn-primary" id="submit" name="submit">Submit</button>
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
</body>

</html>