<?php
	//apptremove.php

	// Initialize the session
	session_start();

	include('config.php');

	$username = ($_SESSION["username"]);
	$id = ($_POST['id']);

	$sql = "DELETE FROM appointments WHERE id = '$id'";
	if($link->query($sql) === true){
	  include("employee.php");
	} else{
		echo "ERROR: Not able to execute $sql. " . $link->error;
	}

?>
