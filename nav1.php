<?php
	//nav1.php

	// Initialize the session
	session_start();

	// Check if the user is logged in, if not then redirect him to login page
	if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
		header("location: welcome.php");
		exit;
	}


?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Ink N Dagger Tattoo Co.</title>
		<link rel="icon" href="tattoodoor.png">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
		<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
		<script>"js/bootstrap.js"</script>
		<style type="text/css">
		body{
      		margin: 0;
			font-family: Arial, Helvetica, sans-serif;
            font-size: 18px;
		}
		.dropdown-submenu {
  			position: relative;
		}
		.dropdown-submenu .dropdown-menu {
  			top: 0;
  			left: 100%;
  			margin-top: -1px;
		}
      	.logo{
      		width: 100%;
        	text-align: center;
      	}
      	@media only screen and (max-width: 1100px) {
            .nav{
                font-size: 30px;
            }
        }
    </style>
	</head>
  	<div class="logo">
  		<a href="#"><img src="/images/rstar.png" alt="republicorps.com" height= "300px" width= "555px"></a>
	</div>
	<nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-header">
		</div>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="account.php"><span class="glyphicon glyphicon-user" style="margin-right: 5px;"></span><?php echo htmlspecialchars($_SESSION["username"]); ?></a></li>
				<li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
			</ul>
		</div>
	</nav>
	<script>
		$(document).ready(function(){
			$('.dropdown-submenu a.test').on("click", function(e){
				$(this).next('ul').toggle();
				e.stopPropagation();
				e.preventDefault();
			});
		});
	</script>
</html>
