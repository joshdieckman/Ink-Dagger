<?php
	//changepassword.php

	// Initialize the session
	session_start();

	include('config.php');

	//include users.php
	require_once "users.php";

	if(not_logged_in() === TRUE){
		header('location: welcome.php');
	}

	if($_POST){
		$currentpassword = $_POST['currentpassword'];
		$newpassword = $_POST['newpassword'];
		$confirmpassword = $_POST['confirmpassword'];

		if($currentpassword == ""){
			echo " * Current password is required <br />";
		}
		if($newpassword == ""){
			echo " * New password is required <br />";
		}
		if($confirmpassword == ""){
			echo " * Confirm password is required <br />";
		}

		if($currentpassword && $newpassword && $confirmpassword){
			if(passwordMatch($_SESSION['id'], $currentpassword) === TRUE){
				if($newpassword != $confirmpassword){
					echo "New password does not match confirm password <br />";
				}else{
					if(changePassword($_SESSION['id'], $newpassword) === TRUE){
						echo "Successfully updated";
					}else{
						echo "Error while updating the information <br />";
					}
				}
			}else{
				echo "Current password is incorrect <br />";
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
				var type = document.getElementById("currentpassword").type;
				if (type === "password") {
					document.getElementById("currentpassword").type = "text";
				} else {
					document.getElementById("currentpassword").type = "password";
				}
			}
			function myFunction1() {
				var type = document.getElementById("newpassword").type;
				if (type === "password") {
					document.getElementById("newpassword").type = "text";
				} else {
					document.getElementById("newpassword").type = "password";
				}
			}
			function myFunction2() {
				var type = document.getElementById("confirmpassword").type;
				if (type === "password") {
					document.getElementById("confirmpassword").type = "text";
				} else {
					document.getElementById("confirmpassword").type = "password";
				}
			}
		</script>
	</head>
	<body>
        <br>
        <br>
                <center>
		<div class="wrapper">
			<h2>Change Password</h2>
			<p>Please fill out this form to change your password.</p>
			<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
				<div class="form-group">
					<label>Current Password</label>
					<input id="currentpassword" type="password" name="currentpassword" class="form-control">
					<input id="checkbox" type="checkbox" onclick="myFunction()"><p>Show Password</p>
				</div>
				<div class="form-group">
					<label>New Password</label>
					<input type="password" name="newpassword" class="form-control">
					<input id="checkbox" type="checkbox" onclick="myFunction1()"><p>Show Password</p>
				</div>
				<div class="form-group">
					<label>Confirm Password</label>
					<input id="password" type="password" name="confirmpassword" class="form-control">
					<input id="checkbox" type="checkbox" onclick="myFunction2()"><p>Show Password</p>
				</div>
				<div class="form-group">
					<input type="submit" class="btn btn-primary" value="Submit">
					<input type="reset" class="btn btn-danger" value="Reset">
				</div>
				<a href="employee.php">Back</a>
			</form>
		</div>
                </center>
	</body>
</html>
