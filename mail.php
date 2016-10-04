<?php
	
	$to = "jg439@njit.edu";
	$subject = "From - ".$_POST['firstName']." ".$_POST['lastName']." (".$_POST['email'].")";
	$message = $_POST['comment'];
	
	mail($to,$subject,$message);
	
	header("Location: contactus.php");
?>