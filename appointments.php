<?php
	//appointments.php

	include('config.php');

	$name = ($_POST['name']);
	$phone = ($_POST['phone']);
	$email = ($_POST['email']);
	$artist = ($_POST['artist']);
	$placement = ($_POST['placement']);
	$description = ($_POST['description']);

	$sql = ("INSERT INTO appointments (name, phone, email, artist, placement, description) VALUES ('$name', '$phone', '$email', '$artist', '$placement', '$description')");
	if($link->query($sql) === true){
		echo "<h3>Your appointment has been scheduled.  Your artist will contact you soon to discuss the details.  Thank you for scheduling an appointment with Ink and Dagger Tattoo Company.</h3>";
      include("book.php");
	}else{
		echo "Error: Not able to execute $sql. " . $link->error;
	}
?>
