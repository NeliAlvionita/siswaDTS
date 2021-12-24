<?php  

error_reporting(0);

//Database Configuration
$db_name 	= "MYSQL_DATABASE";
$host		= "db";
$username	= "MYSQL_USER";
$password       = "MYSQL_PASSWORD";


//make connection to database
$conn 		= mysqli_connect($host,$username,$password,$db_name) or die("Database connection error!");


?>
