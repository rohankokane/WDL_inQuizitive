<SCRIPT type="text/javascript">
    window.history.forward();
    function noBack() { window.history.forward(); }
</SCRIPT>
<?php
session_start();   
if(!isset($_SESSION['username'])){
    header('location:index.php');
}
// if(!isset($_POST['Next'])){
//     header('location:index.php');
// }
include('connect.php');
?>
<html>
<head>
        <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <title>sow-rait</title>
        <link rel="stylesheet" href="assets/header.css">
        <link rel="stylesheet" href="assets/default.css" />
		<link rel="stylesheet" href="assets/component.css" />
        <script src="assets/modernizr.custom.js"></script>
        <!-- icon -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/bootstrap.css" />
        <script src="assets/jquery-1.11.3.min.js"></script>
        <script src="assets/bootstrap.js"></script>
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet"> 
        <link href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!-- for logout button -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="assets/footer.css">
        <style>
        @import "http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css";
        body{
        /* display: flex;
        flex-direction: column;
        justify-content: space-between; */
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        /* height: 100vh; */
        }
        
#load{
	transition: all 0.5 s;
	font-family: Roboto condensed;
	font-size: 20px;
	display: flex;
	flex-direction: column;
	justify-content: center;
	align-items: center;
	align-content: center;
	position:fixed;
	/* left: 35vw; */
	/* top: 25vh; */
	margin: auto;
	margin-top: 25vh;
	/* align-self: center; */
	/* width: min-content;  */
	/* height: min-content; */
	width: 100vw;
	height: 100vh;
	max-width: 100vw;
	max-height: 100vw;
	flex-wrap: wrap;
	z-index: 1;
}
.loader {
  border: 14px solid #f3f3f3;
  border-radius: 50%;
  border-top: 14px solid #3498db;
  width: 100px;
  height: 100px;
  -webkit-animation: spin 2s linear infinite; /* Safari */
  animation: spin 2s linear infinite;
}

/* Safari */
@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}
/* sco
        /* score dialouge box*/
        #box{
        display:flex;
        flex-direction:column;
        justify-content:space-evenly;
        width: 80vw;
        height: 50vh;
        overflow: hidden;
        background: #f1f1f1;
        box-shadow: 0 0 20px black;
        border-radius: 8px;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%,-50%);
        z-index: 9999;
        padding: 10px;
        text-align: center;
        max-width:500px;
        /* display: none; */
        }
        #box span{
        color: #2ecc71;
        font-size: 40px;
        display: block;
        margin: 20px 0;
        }
        #box h1{
        color: #333;
        }
        .close-btn{
        /* position: absolute; */
        /* left: 40%; */
        /* top: 80%; */
        font-size: 18px;
        color: white;
        padding: 10px 20px;
        cursor: pointer;
        background: #3498db;
        /* display: inline-block; */
        border-radius: 4px;
        align-self: center;
        width: min-content;
        }
            
        /* .container-main{
        display: flex;
        flex-direction: column;
        justify-content: center;
        
        } */
        .container-main{
        /* padding: 15px; */
        display: flex;
        flex-direction: column;
        justify-content: center;
        /* background-image: url(images/dy_bg.jpg); */
        background-repeat: no-repeat;
        background-color:#fdfdfd;
        /* background-position: 50px; */
        background-size:contain;	
        padding: 0px;
        }
        .content{
            padding: 0vh 8vw 2vh 8vw;
        }
        .wall{
	/* font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;  */
	letter-spacing: 1px; 
	font-size: 24px;
}
        .ele{
        display: flex;
        flex-direction: column;
        justify-content: center;
        }
        .fa {
  /* padding: 15px; */
  font-size: 30px;
  max-width: 70px;
  text-align: center;
  text-decoration: none;
  margin: 2px 2px;
}

        /* #file input[type="file"] {
        opacity: 0;
        position: fixed;
        width: 0;
        transition: all 0.5s;
        }
        #file label {
        display: flex;
        flex-direction: row;
        justify-content:center; */
        /* background-image: -webkit-linear-gradient(); */
        /* background-image: -webkit-linear-gradient(left, #39ade7, #2079b0); */
        /* background-color: #44c0fe; */
        /* padding: 10px 10px; */
        /* font-family: sans-serif, Arial; */
        /* font-size: 16px;
        color:rgb(249, 252, 255);
        border: 2px solid #3181b6;
        align-items: baseline;
        border-radius: 6px;
        transition: all 0.5s; */

        /* width:80vw; */
        /* } */
        /* #file{ */
        /* background-color: #3e8e41; */
        /* box-shadow: 0 5px #666; */
        /* background-color: #3498db; */
        /* background-image: -webkit-linear-gradient(left, #2ecc55, #20b06d); */
        /* border-radius: 6px; */
        }
        /* #file:active{
            transform: translateY(4px);
        } */
        /* #filelabel::after{
            background-image: -webkit-linear-gradient(left, #2ecc55, #20b06d);
        } */
        .box-content{
        display: flex;
        flex-direction: column;
        justify-content:space-around;
        height:inherit;
        }
       
        .vid{
        display: flex;
        flex-direction: row;
        justify-content:space-evenly;
        flex-wrap: wrap;
        }
        .button {
        /* display: inline-block; */
        border-radius: 4px;
        background-color: #9f1c33;
        border: none;
        color: #FFFFFF;
        text-align: center;
        font-size: 28px;
        padding: 10px;
        width: 50vw;
        max-width: 120px;
        transition: all 0.5s;
        cursor:pointer;
        margin: 5px;
        box-shadow:inset 0 -0.4em 0 -0.20em rgba(0,0,0,0.17);
        }

        .button span {
        cursor: pointer;
        display: inline-block;
        position: relative;
        transition: 0.5s;
        }

        .button span:after {
        content: '\00bb';
        position: absolute;
        opacity: 0;
        top: 0;
        right: -20px;
        transition: 0.5s;
        }

        .button:hover span {
        padding-right: 25px;
        }

        .button:hover span:after {
        opacity: 1;
        right: 0;
        }
        .button:active {
        /* background-color: #3e8e41; */
        /* box-shadow: 0 5px #666; */
        transform: translateY(4px);
        }
        a {text-decoration: none;}
        .file::after{
            content: " ";
        }
        @media (min-width: 480px) {
         .container-main{
            background-size:70vh;
         }
 		 .site-icon{
			margin-left: 5vw;
            }
		 .wall{
			/* font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;  */
			letter-spacing: 2px; 
			font-size: 40px;
         }
         #load{
	margin-top: auto;
	}
        }
.feedback-emoji input[type="radio"] {
opacity: 0;
position: fixed;
width: 0;
}

.feedback-emoji label {
opacity: 0.5;
/* width:80vw; */
}

.feedback-emoji label:hover{
 /* background-color: #dfd; */
opacity: 0.7;
}
/* .5:hover{
    content: &#128577;
} */
.feedback-emoji input[type="radio"]:checked + label {
opacity: 1.0;
}

/* .button:active span:after {
    transform: scale(0.99);
}
.button:active{
 top:0.2em;
} */
</style>        
</head>

<body onload="noBack();" onpageshow="if (event.persisted) noBack();">
<div id="load" style="visibility: hidden;">
	<div class="loader">
	<!-- <img src="images/loader.gif"> -->
	</div>
	<div><br><br></div>
	Uploading...
	<!-- <div><br></div> -->
	<span style="margin: 0;">Please wait for a moment.</span>
	</div>    

<?php

//  if($_SESSION['flag'] == 0){ 
   if(isset($_POST['Next'])){
   ?>
     <div id="box">
        <div class="box-content">
            <div>
                <h1>Thank you!</h1>
                <p>We would be glad to receive your feeback.</p>
                <div class="feedback-emoji">
                    <form action="feedback.php" method="POST" id="myForm">
                        <input type="radio" name="rating" id="1" value="1" onclick="change(1);"><label for="1" class="emoji" style='font-size:30px;'>&#128544;</label>
                        <input type="radio" name="rating" id="2" value="2" onclick="change(2);"><label for="2" class="emoji" style='font-size:30px;'>&#128577;</label>
                        <input type="radio" name="rating" id="3" value="3" onclick="change(3);"><label for="3" class="emoji" style='font-size:30px;'>&#128528;</label>
                        <input type="radio" name="rating" id="4" value="4" onclick="change(4);"><label for="4" class="emoji" style='font-size:30px;'>&#128522;</label>
                        <input type="radio" name="rating" id="5" value="5" onclick="change(5);"><label for="5" class="emoji" style='font-size:30px;'>&#128516;</label>
                    </div>
                </div>
                <?php
                if($_SESSION['Resultans']>=6){
                    echo "<b>You will receive your certificate via email!</b>";
                }
                ?>
                <br>
                <br>
                <button class="close-btn">
                    <!-- <button onclick="nopop(),"; name="Close"  type="submit" class="button"><span> Close </span></button></div> -->
                    <a onclick=" nopop(); submitform() " name="close" class="close-btn">Close</a>
                </button>
                <script>
                    function submitform()
                    {
                    document.getElementById("myForm").submit();
                    }
                </script>
                </form>
                    
        </div>
    </div>    
    <?php
    } //if close session flag
// }
    ?>
<script>
        // $(document).ready(function(){
        //     PopUp();
        // // 5000 to load it after 5 seconds from page load
        // });

    function nopop(){
        document.getElementById("box").style.display= "none";
        // document.getElementById("toblur").style.filter = "blur(0px)";
    }
</script>
<div class="toblur" id="toblur">   <!--to blur whole page except header -->    
<div class="container-main">    
    <a href="logout.php" class="btn btn-info btn-lg" style="align-self: flex-end; margin:5px; font-size: 15px; background-color:#9f1c33; border-color: #751627; border-bottom-width: 5px;">
          <span class="glyphicon glyphicon-log-out"></span> Log out </a>
    <div class="content">
        <h2>Thank you!</h2>
    </div>


        
            </div>
        </div>

		
<script>

</body>
</html>