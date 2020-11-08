<?php

if (!isset($_POST['submit'])){
	header('location:index.php');
}
session_start();	
$_SESSION['q_submitted']=0;
// header('location:quiz.php');
include('connect.php');
mysqli_query($conn,"SET character_set_results = 'utf8', character_set_client = 'utf8', character_set_connection = 'utf8', character_set_database = 'utf8', character_set_server = 'utf8'");
mysqli_set_charset($conn, 'utf8');

// $conn = mysqli_connect('localhost','root','');
if($conn){
	// echo"connection";
}

// mysqli_select_db($conn,'quizdb');

$name = $_POST['name'];
// $name= ($name);

$email = $_POST['email'];
$phno =$_POST['contact'];
$clgname = $_POST['clgname'];
$age = $_POST['age'];
// $nss= $_POST['vol'];
$_SESSION['username']=$name;
$_SESSION['email']=$email;
$message="already attempted";
$query= "SELECT * FROM `user` WHERE `email` = '$email' ";
$result = mysqli_query($conn, $query);

if(mysqli_num_rows($result) > 0)
{
	?>
	<script> 
			alert("Sorry! You've already attempted the quiz!");
            location.href="logout.php";
	</script>
	<?php

}
else if (!$result || mysqli_num_rows($result) == 0)
{	
		$q = "INSERT INTO `user`(`name`, `email`, `phno`, `clgname`, `age`, `nss`,`marathi`) VALUES ('$name', '$email', '$phno', '$clgname', '$age', '$nss',0)";
		mysqli_query($conn,$q);
		header('location:quiz.php');
}
?>