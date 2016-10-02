<?php
//set to show php errors
//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);

//creating database connection
require_once("databaseClass.php");
 $conn = new mysqlDB("./credentials.ini");

//determining ajax request
$obj = $_REQUEST['object'];

$username = $_REQUEST['username'];
$password = $_REQUEST['password'];

$email = $_REQUEST['email'];
$password1 = $_REQUEST['password1'];


switch($obj){
	case 'login':
		echo $conn->checkUser($username, $password);
			
	break;
	
	case 'register':
		echo $conn->registerUser($email, $password1);
		
	break;
}
?>