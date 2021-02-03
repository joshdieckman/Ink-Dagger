<?php
	//welcome.php

// Initialize the session
session_start();

// Check if the user is already logged in, if yes then redirect him to employee page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: employee.php");
    exit;
}

// Define variables and initialize with empty values
$username = $password = $accfunct = "";
$username_err = $password_err = $customer = "";
$accesslvl = "";

// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){

    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter username.";
    } else{
        $username = trim($_POST["username"]);
    }

    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }

    // Validate credentials
    if(empty($username_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT id, username, password, accesslvl, accfunct FROM users WHERE username = ?";

        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);

            // Set parameters
            $param_username = $username;

            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);

                // Check if username exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password, $accesslvl, $accfunct);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $hashed_password)){
                            // Password is correct, so start a new session
                            session_start();

                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;
                          	$_SESSION["accesslvl"] = $accesslvl;
                          	$_SESSION["accfunct"] = $accfunct;

                            // Redirect user to welcome page
                            header("location: employee.php");
                        } else{
                            // Display an error message if password is not valid
                            $password_err = "The password you entered was not valid.";
                        }
                    }
                } else{
                    // Display an error message if username doesn't exist
                    $username_err = "No account found with that username.";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
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
                        h1{
                                color: yellow;
                                text-shadow: 2px 2px 5px black;
                        }
                        p{
                                color: yellow;
                                text-shadow: 2px 2px 5px black;
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
                                color: black;
                                background-color: red;
                        }
			label{
                                padding: 5px;
                                color: yellow;
                                text-shadow: 2px 2px 5px black;
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
                                        <a href="/ind/index.php"><img src="/images/tattoodoor.png" alt="inkndagger.com" height="450px" width="450px"></a>
                                </div>
                               <br>
				<div id="signin">
					<h1>Login</h1>
					<p>Please fill in your credentials to login.</p>
					<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
						<div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
							<label>Username</label>
							<input id="username" type="text" name="username" class="form-control" value="<?php echo $username; ?>" autofocus>
							<span class="help-block"><?php echo $username_err; ?></span>
						</div>
						<div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
							<label>Password</label>
							<input id="password" type="password" name="password" class="form-control">
							<input id="checkbox" type="checkbox" onclick="myFunction()"><p>Show Password</p>
							<span class="help-block"><?php echo $password_err; ?></span>
						</div>
						<div class="form-group">
							<input type="submit" class="btn" value="Login">
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
