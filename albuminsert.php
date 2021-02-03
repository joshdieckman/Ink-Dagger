<?php
	//albuminsert.php

	// Initialize the session
	session_start();

	include('config.php');

	// Check if the user is logged in, if not then redirect him to login page
	if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    	header("location: welcome.php");
    	exit;
	}

	$id = ($_SESSION["id"]);
	$username = ($_SESSION["username"]);

	$target = "images/";
	$target = $target . basename( $_FILES['image']['name']);
	$image =  basename($_FILES['image']['name']);

	$sql = ("INSERT INTO images (artist, filename) VALUES ('$username', '$image' )");
	if($link->query($sql) === true){
		if(move_uploaded_file($_FILES['image']['tmp_name'], $target)){
			$_SESSION["username"] = $username;
          	include("employee.php");
	} else{
		echo "ERROR: Not able to execute $sql. " . $link->error;
	}
    }
?>
