<?php
if (!isset($_POST['submit_quiz']))
{
	header('location:logout.php');
}
session_start();
if(!isset($_SESSION['username'])){
header('location:index.php');
}
include('connect.php');
$_SESSION['q_submitted']=1;
if (mysqli_connect_errno()){
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

//    $conn = mysqli_connect('localhost','root','12345');
   	// if($conn){
   	// 	echo"connection";
   	// }
    //    mysqli_select_db($conn,'quizdb');
         $_SESSION['f']=0;
         $counter = 0;
         $Resultans = 0;
        //  if(!isset($_POST['submit_post'])){ -->
         if(isset($_POST['submit_quiz'])){
            if(!empty($_POST['quizcheck'])) {
        
            // Counting number of checked checkboxes.
            $checked_count = count($_POST['quizcheck']);
            // print_r($_POST);
            // echo $checked_count;
     
            //55,59,32
            // Loop to store and display values of individual checked checkbox.
            $selected = $_POST['quizcheck'];
            
            $q1= " select q_ans from questions ";
            $ansresults = mysqli_query($conn,$q1);
            $i = 1;
            while($rows = mysqli_fetch_array($ansresults)) 
            {
              // print_r($rows);
              if(!isset($selected[$i]))
              { 
                $counter++;
                $i++;
              }
              else
              {

              $flag = $rows['q_ans'] == $selected[$i];	
            			if($flag){
            				// echo "correct ans is ".$rows['ans']."<br>";				
                        $counter++;
                        // echo "this is right";
            				$Resultans++;
            				// echo "Well Done! your ". $counter ." answer is correct <br><br>";
            			}else{
                        // echo "wrong";
            				$counter++;
            				// echo "Sorry! your ". $counter ." answer is innncorrect <br><br>";
            			}					
            		$i++;		
                }
            
         
            			
            	}}} 
            // echo $Resultans;
            $name = $_SESSION['username'];
            $email = $_SESSION['email'];
            $_SESSION['Resultans']=$Resultans;
                    $sql5 = "SELECT `user_id` FROM `user` WHERE `email` = '$email' ";
                
                    $res = mysqli_query($conn, $sql5);
                    //echo mysqli_num_rows($res); 

                    if (mysqli_num_rows($res) > 0) {
                        // output data of each row
                        while($row = mysqli_fetch_assoc($res)) {
                        // echo "id: " . $row["user_id"];
                        $user_id = $row["user_id"];
                        }
                    } else {
                        // echo "0 results";
                    }
                    // echo "user_id :::: $user_id";
                    $finalresult = " insert into score(name,sc,user_id) values ('$name','$Resultans','$user_id') ";
                    $queryresult= mysqli_query($conn,$finalresult); 
                    // if($queryresult){
                    // 	echo "successssss";
                    // }
            // }          
            // else{
            //     echo '';
            // }

// echo $email;
$sql5 = "SELECT `user_id` FROM `user` WHERE `email` = '$email' ";

$res = mysqli_query($conn, $sql5);
//echo mysqli_num_rows($res); 

if (mysqli_num_rows($res) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($res)) {
   //  echo "id: " . $row["user_id"];
    $user_id = $row["user_id"];
    }
} else {
    echo "0 results";
}

if(isset($selected)){
$query="insert into `choice`(`user_id`,";
$cnt=1;
foreach($selected as $key => $val )
{
    $query = $cnt++<count($selected) ?  $query.="`$key`,"  : $query.="`$key`";   
}
$query.=") values ($user_id,";
$cnt=1;
foreach($selected as $key => $val )
{
    $val=addslashes($val);
    $query = $cnt++<count($selected) ?  $query.="$val," :  $query.=$val;
}
$query.=")";
mysqli_query($conn,$query);
}

?>

<!doctype html>
<html lang="en">

<head>
   <!-- Required meta tags -->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <link rel="stylesheet" href="css/main.css" />
   <link rel="stylesheet" href="css/header.css" />
   <link rel="stylesheet" href="css/review.css" />
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

<script type="text/javascript">

window.history.forward();
function noBack() { window.history.forward(); }
</script>
</head>
<body onload="noBack();" onpageshow="if (event.persisted) noBack();">


<div class="container">

<div class="text-center heading">
   <h4> <span style="color:#9F1C33"> <?php echo $_SESSION['username']; ?> , </span>Thank you for participating! </h4>
</div>

   <br>
   <!-- <div class="col-lg-8 d-block m-auto bg-light quizsetting "> -->
      <p class="text-center top-text" > <?php echo $_SESSION['username']; ?>, you have scored <b><?php echo $Resultans; ?></b> out of <b>15.</b></p>
      <p class="text-center top-text">
      <?php
      if($Resultans>=6)
      {
         echo "Congratulations, you will receive your <b>E-certificate</b> on the registered Email ID soon..";
      }
      else{
         echo "We would recommend you to review your answers.";
      }
      ?>
      </p>
     
      <form id="myForm" action="add-image.php" method="post">
      <div>
      <!-- <input type="submit" class="button" name="Next" Value="Next" class="btn btn-success m-auto d-block" style="float:right;"> -->
      <div class="text-center">
            <input type="submit" name="Next" Value="Next" id="top-next" >
         </div>
   </div> 
      <h4 class="review" style="color:rgb(73, 73, 73)">Quiz Review:</h4>
        <?php   

               if(isset($_POST['quizcheck'])){
               $selected = $_POST['quizcheck'];
               }
               // print_r($selected);
               for($i=1;$i<21;$i++){
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
                              <img src="images/<?php echo $row1['img']; ?>" style="max-width:80vw; height:auto; max-height: 40vh;" class="img-responsive" alt="img01" >
                              <!-- <img src="data:image;base64,'.base64_encode($row1['img']).' " alt="Image" style="max-width:90vw; height:auto; max-height: 50vh;">'; -->
                           </div>
                           <br>
                        <div class="radio-toolbar" >
                        <?php
                        $sql = "SELECT * FROM `answers` WHERE `q_ans` = $i";
                        $result = mysqli_query($conn, $sql);
                           if (mysqli_num_rows($result) > 0) {
                              while($row = mysqli_fetch_assoc($result)) {
                                 if(isset($selected[$i])){
                                    if($row1['q_ans']==$selected[$i]){
                                       // correct marked
                                       if($row['aid']==$selected[$i]){ //green
                                        ?><div class="clearfix">
                                          <label for="<?php echo $row['aid']; ?>" class="green"> <?php echo $row['answer']; ?><i class="fa fa-check"></i></label>   
                                          </div>
                                    <?php }
                                       else{ ?>
                                          <div class="clearfix">
                                          <label for="<?php echo $row['aid']; ?>" class="normal"> <?php echo $row['answer']; ?></label>   
                                          </div>
                                       <?php
                                          }  
                                       ?>
                                    <?php }
                                    else { //wrong marked
                                       if($row1['q_ans']==$row['aid']){ //green which is correct by db
                                          ?><div class="clearfix">
                                          <label for="<?php echo $row['aid']; ?>" class="green"> <?php echo $row['answer']; ?></label>   
                                          </div>
                                    <?php
                                       }
                                       elseif($row['aid']==$selected[$i]){  //if user didnt ans correct
                                       ?> <div class="clearfix">
                                          <label for="<?php echo $row['aid']; ?>"  class="red"> <?php echo $row['answer']; ?><i class="fa fa-times"></i></label>   
                                          </div>
                                  <?php  }
                                       else{ ?>
                                          <div class="clearfix">
                                          <label for="<?php echo $row['aid']; ?>" class="normal"> <?php echo $row['answer']; ?></label>   
                                          </div>
                                       <?php }
                                       }  //selected and wrong marked end
                                 }elseif ($row1['q_ans']==$row['aid']) { //not selected
                                    //green
                                 ?>    <div class="clearfix">
                                      <label for="<?php echo $row['aid']; ?>" class="green"> <?php echo $row['answer']; ?></label>   
                                       </div>
                                <?php }
                                 else{
                                    // normal gray
                                 ?>    <div class="clearfix">
                                       <label for="<?php echo $row['aid']; ?>" class="normal"> <?php echo $row['answer']; ?></label>   
                                       </div>
                              <?php   }
                              ?>	
                  
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

            <!-- <input type="submit" name="Next" Value="Next" class="btn btn-success m-auto d-block" styel="align-items:center;"> -->
            <div class="text-center">
            <input type="submit" name="Next" Value="Next" id="submit-btn" >
         </div>
            

            </form>

            <div>
            <br>
            <br>
            <br>
            <br>
            </div>

</body>
</html>
