<?php
	// $username="root"; //username for database
	// $password=""; //database password
	// $hostname="localhost"; //hostname
	// $dbname="raitac_nutritionquiz"; //database name
	// $teston = true;


	// $username="epiz_26731118"; //username for database
	// $password="KypbP5hwFBsB8"; //database password
	// $hostname="sql300.epizy.com"; //hostname
	// $dbname="epiz_26731118_tday_quiz"; //database name
	// $teston = true;
	
	
	$username="root"; //username for database
	$password="root"; //database password
	$hostname="localhost"; //hostname
	$dbname="raitac_nutritionquiz"; //database name
	$teston = true;

	
							//localhost,root
	$conn = mysqli_connect($hostname,$username,$password)
		or die("error connecting to database"); //make connection
	//echo "Connected to MySQL<br>";
	mysqli_select_db($conn,$dbname) //select database
		or die("Could not select examples");
	//echo "Database selected<br>";
	mysqli_query($conn,"SET character_set_results = 'utf8', character_set_client = 'utf8', character_set_connection = 'utf8', character_set_database = 'utf8', character_set_server = 'utf8'");
	mysqli_set_charset($conn, 'utf8');
?>