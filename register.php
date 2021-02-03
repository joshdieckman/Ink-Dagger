<?php
	//register.php

	session_start();

	// Include config file
	require_once "config.php";

	//include users.php
	require_once "users.php";

	// Check if the user is already logged in, if yes then redirect him to employee page
	if(logged_in() === TRUE) {
		header('location: employee.php');
	}

	//form is submitted
	if(_POST){
		$username = $_POST['username'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$confirm_password = $_POST['confirm_password'];
		if($username == ""){
			echo " * Username is required <br />";
		}
		if($password == ""){
			echo " * Password is required <br />";
		}
		if($confirm_password == ""){
			echo " * Confirm Password is required <br />";
		}
		if($username && $password && $confirm_password){
			if($password == $confirm_password){
				if(userExists($username) === TRUE){
					echo $_POST['username'] . " already exists!";
				}else{
					if(registerUser() === TRUE){
						echo "Successfully Registered <a href='welcome.php'>Login</a>";
					}else{
						echo "Error";
					}
				}
			}else{
				echo " * Password does not match with Confirm Password >br />";
			}
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Ink N Dagger Tattoo Co.</title>
		<link rel="icon" href="/images/tattoodoor.png">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
		<style type="text/css">
			body{
                                font-size: 18px;
				font-family: Arial, Helvetica, sans-serif;
				margin: 0;
				background-color: black;
                                background-image: url("/images/inkanddagger.png");
				background-position: center;
				background-repeat: no-repeat;
				background-attachment: fixed;
			}
                        .wrapper{
                                width: 90%;
                        }
                        h2, label, p{
                                color: yellow;
                                padding: 5px;
                                text-shadow: 2px 2px 5px black;
                        }
                        .form-control{
                                display: block;
                                width: 30%;
                                padding: 15px;
                        }
                        .btn{
                                width: 30%;
                                padding: 10px;
                                display: block;
                                margin-top: 10px;
                        }
			#checkbox{
				margin: 10px 0;
                                text-align: left;
			}
		</style>
		<script type="text/javascript">
			function myFunction() {
				var type = document.getElementById("password").type;
				if (type === "password") {
					document.getElementById("password").type = "text";
				} else {
					document.getElementById("password").type = "password";
				}
			}
			function myFunction1() {
				var type = document.getElementById("confirm_password").type;
				if (type === "password") {
					document.getElementById("confirm_password").type = "text";
				} else {
					document.getElementById("confirm_password").type = "password";
				}
			}
		</script>
	</head>
	<body>
        <br>
        <br>
                <center>
		<div class="wrapper">
			<h2>Create Account</h2>
			<p>Please fill out this form to create an account.</p>
			<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
				<div class="form-group">
					<label>Username</label>
					<input type="text" name="username" class="form-control" value="<?php if($_POST){ echo $_POST['username'];} ?>">
				</div>
				<div class="form-group">
					<label>Email</label>
					<input type="text" name="email" class="form-control" value="<?php if($_POST){ echo $_POST['email'];} ?>">
				</div>
				<div class="form-group">
					<label>Password</label>
					<input id="password" type="password" name="password" class="form-control" value="<?php if($_POST){ echo $_POST['password'];} ?>">
					<input id="checkbox" type="checkbox" onclick="myFunction()"><p>Show Password</p>
				</div>
				<div class="form-group">
					<label>Confirm Password</label>
					<input id="confirm_password" type="password" name="confirm_password" class="form-control" value="<?php if($_POST){ echo $_POST['confirm_password'];} ?>">
					<input id="checkbox" type="checkbox" onclick="myFunction1()"><p>Show Password</p>
				</div>
				<div class="form-group">
					<input type="submit" class="btn btn-primary" value="Submit">
					<input type="reset" class="btn btn-danger" value="Reset">
				</div>
				<p>Already have an account? <a href="welcome.php">Login here</a>.</p>
			</form>
		</div>
                </center>
	</body>
</html>
