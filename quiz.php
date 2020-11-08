<?php
   session_start();
   if(!isset($_SESSION['username'])){
   header('location:index.php');
   }

   if($_SESSION['q_submitted']==1){
      header('location:review.php');
   }

   include('connect.php');
   mysqli_query($conn,"SET character_set_results = 'utf8', character_set_client = 'utf8', character_set_connection = 'utf8', character_set_database = 'utf8', character_set_server = 'utf8'");
   mysqli_set_charset($conn, 'utf8');
   if (mysqli_connect_errno()){
   echo "Failed to connect to MySQL: " . mysqli_connect_error();
   }
   $_SESSION['flag']=0;
?>


<!doctype html>
<html lang="en">

<head>
   <!-- Required meta tags -->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <link rel="stylesheet" href="css/main.css" />
   <link rel="stylesheet" href="css/header.css" />
   <link rel="stylesheet" href="css/quiz.css" />
   <link rel="stylesheet" href="css/footer.css" />
   <link href="assets/icofont/icofont.min.css" rel="stylesheet">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">

</head>

<body>
   <header>
      <img src="./images/logo-quiz.jpeg" alt="Logo" class="heroLogo">
      <div class="menuToggle">
         <img src="./assets/menu-ham.svg" alt="Open Menu" class="bars">
         <img src="./assets/close-ham.svg" alt="Close Menu" class="cross">
      </div>
      <nav class="navList">
         <ul class="navItems">
            <li><a href="index.php#home" class="">Home</a></li>
            <li><a href="index.php#about-us" class="about-link">About us</a></li>
            <li><a href="index.php#quizzes" class="contest-link">Quizzes</a></li>
            <li><a href="index.php#contact-us" class="courses-link">Contact Us</a></li>
         </ul>
      </nav>
   </header>



   <div class="container">

      <div class="text-center heading">
         <h4> <a href="#" class="heading"> <?php echo $_SESSION['username']; ?>,</a> Welcome to the
            Quiz! </h4>
      </div>
      <br>
      <!-- <div class="col-lg-8 d-block m-auto bg-light quizsetting "> -->
      <p class="text-center question"> <?php echo $_SESSION['username']; ?>, you have to select only 1 out of 4 options.
         <br>If you score atleast 6 out of 15 you will be awarded with a certificate. <br>Best of luck!</p>
      <form action="review.php" method="post">
         <?php
               for($i=1;$i<16;$i++){
                  $l = 1;
                  $ansid = $i;

                  $sql1 = "SELECT * FROM `questions` WHERE `qid` = $i ";
                  $result1 = mysqli_query($conn, $sql1);
                  if (mysqli_num_rows($result1) > 0) {
                     $row1 = mysqli_fetch_assoc($result1)
                     ?>
         <br>
         <!-- card Start -->
         <div class="card-quiz">
            <!-- question print -->
            <p class="question"><?php echo $i ." . ". $row1['question']; ?> </p>
            <!-- image: -->
            <div class="text-center">
               <img src="images/<?php echo $row1['img']; ?>" style="max-width:80vw; height:auto; max-height: 40vh;"
                  class="img-responsive" alt="img01">

            </div>
            <br>
            <div class="radio-toolbar">
               <?php
                        $sql = "SELECT * FROM `answers` WHERE `q_ans` = $i";
                        $result = mysqli_query($conn, $sql);
                           if (mysqli_num_rows($result) > 0) {
                              while($row = mysqli_fetch_assoc($result)) {
                              ?> <div class="clearfix">
                  <input type="radio" name="quizcheck[<?php echo $ansid; ?>]" id="<?php echo $row['aid']; ?>"
                     value="<?php echo $row['aid']; ?>"><label for="<?php echo $row['aid']; ?>">
                     <?php echo $row['answer']; ?></label>
               </div>

               <?php 
                              } 
                           } 
                           $ansid = $ansid + $l; 
                  ?>
            </div>
         </div>
         <?php
                  }     
               } 
               ?>
         <!-- <br> -->
         <br>
         <div class="text-center">
            <input type="submit" name="submit_quiz" Value="Submit" id="submit-btn" >
         </div>
      </form>
      <div>
         <br>
         <br>
         <br>
         <br>
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

</body>

</html>