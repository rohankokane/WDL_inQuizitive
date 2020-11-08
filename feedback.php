<?php
session_start();
include('connect.php');

if($conn){
	// echo"connection";
}

$marked=$_POST['rating'];
// echo $marked;
$name = $_SESSION['username'];
$email = $_SESSION['email'];
$_SESSION['flag']=1;
    if (isset($_POST["rating"]))
    {
        $q = "update `user` set `feedback`=$marked where `email` = '$email' ";
        mysqli_query($conn,$q);
        // echo "yes";
    }

    header('location:add-image.php');
?>