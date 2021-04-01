<?php
	//welcome.php

  // Include config file
  require_once "config.php";

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Ink N Dagger Tattoo Co.</title>
		<link rel="icon" href="/images/tattoodoor.png">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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
			.container{
                                width: 100%;
                                padding: 20px;
                        }
                        h1, h3{
                                color: red;
                                text-shadow: 2px 2px black;
                        }
                        p{
                                color: red;
                                text-shadow: 2px 2px black;
                        }
			.column{
                                width: 95%;
                                padding: 10px;
                                flex: 100%;
                                margin: 0 auto;
                        }
			.form-control{
                                display: block;
                                width: 30%;
                                padding: 15px;
                        }
			.btn{
                                width: 30%;
                                padding: 10px;
                                color: red;
                        }
			label{
                                padding: 5px;
                                color: red;
                                text-shadow: 2px 2px black;
                        }
          #username, #password, #submit{
          		background-color: transparent;
          }
			@media only screen and (min-width: 500px) {
				.form-control{
					display: block;
					width: 100%;
				}
				.btn{
					width: 100%;
					padding: 20px;
					font: 30px sans-serif;
				}
				body{
					font-size: 30px;
				}
			}
			@media only screen and (min-width: 768px) {
				.form-control{
					display: block;
					width: 90%;
				}
				.btn{
					width: 90%;
					padding: 20px;
					font: 25px sans-serif;
				}
				body{
					font-size: 25px;
				}
			}
			@media only screen and (min-width: 992px) {
				.form-control{
					display: block;
					width: 80%;
				}
				.btn{
					width: 80%;
					padding: 15px;
					font: 20px sans-serif;
				}
				body{
					font-size: 20px;
				}
			}
			@media only screen and (min-width: 1100px) {
				.form-control{
					display: block;
					width: 70%;
				}
				.btn{
					width: 70%;
					padding: 15px;
					font: 15px sans-serif;
				}
				body{
					font-size: 18px;
				}
			}
			@media only screen and (min-width: 1250px) {
				.form-control{
					display: block;
					width: 60%;
				}
				.btn{
					width: 60%;
					padding: 15px;
					font: 15px sans-serif;
				}
				body{
					font-size: 18px;
				}
			}
			@media only screen and (min-width: 1350px) {
				.form-control{
					display: block; width: 50%; padding: 15px;
				}
				.btn{
					width: 50%; padding: 15px; font: 18px sans-serif;
				}
				#checkbox{
					margin: 10px 0;
				}
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
      </script>
	</head>
	<body>
		<div class="container">
          <div class="wrapper">
           <div class="col-md-12">
			<center>
                <div class="logo">
                    <a href="/dagger/index.php"><img src="/images/tattoodoor.png" alt="inkndagger.com" height="450px" width="450px"></a>
                </div>
                <br>
				<div id="signin">
					<h1>Login</h1>
					<h3>Please fill in your credentials to login.</h3>
					<form action="welcome.php" method="post">
                      	<?php include('errors.php'); ?>
						<div class="form-group">
							<label>Username</label>
							<input id="username" type="text" name="username" class="form-control" value="<?php echo $username; ?>" autofocus>
						</div>
						<div class="form-group">
							<label>Password</label>
							<input id="password" type="password" name="password" class="form-control" value="<?php echo $password; ?>" required>
							<input id="checkbox" type="checkbox" onclick="myFunction()"><p>Show Password</p>
						</div>
						<div class="form-group">
                          	<button type="submit" id="submit" name="login" class="btn btn-danger">Log In</button>
						</div>
						<p>Don't have an account? <a href="register.php">Sign up now</a>.</p>
					</form>
				</div>
			</center>
           </div>
		</div>
      </div>
	</body>
</html>
