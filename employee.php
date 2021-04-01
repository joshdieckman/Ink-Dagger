<?php
	//employee.php

	include('config.php');

	// Initialize the session
	session_start();

	// zero path variable
	$pathext = $path = "";

	if(empty($_SESSION['username'])){
		header("location: welcome.php");
	}

	$path = ($_SESSION["accfunct"]);
	$username = ($_SESSION['username']);

	include $path;

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
		<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
		<link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
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
              	color: white;
			}
			.container{
				width: 100%;
				padding: 20px;
              	margin-top: 75px;
			}
			.wrapper{
				width: 100%;
				padding: 20px;
			}.
			.appointments, .submit, .art{
				width: 100%;
			}
          	.employee{
                width: 100%;
                height: 100px;
                background-image: url("/images/banner.png");
                background-position: center;
                background-repeat: repeat;
                box-shadow: 4px 3px 8px 1px black;
              	position: fixed;
              	left: 0;
              	right: 0;
              	top: 0;
              	z-index: 10;
            }
            .logo{
                width: 100%;
                text-align: center;
                margin-top: 10px;
            }
          h2{
          		display: inline-block;
            	margin: 15px;
            	text-shadow: 2px 2px black;
          }
          #logout{
          		display: inline-block;
            	margin-left: 5px;
          }
          	.col-md-12{
          		width: 100%;
              	margin: 25px 0;
              	text-align: center;
          	}
            .col-md-12 h3, .col-md-12 a, .col-md-12 h2{
				display: inline-block;
              	margin: 10px;
              	color: red;
            }
          	.col-md-12 a{
              	margin-top: -5px;
            }
            .table{
				color: black;
              	background-color: lightgray;
            }
          th, td{
          	text-align: center;
          }
          .submit{
          	width: 100%;
          }
          #file, #submit{
          	background-color: transparent;
          }
          .submit label{
                 margin: 10px 0;
            }
            .form-group{
				width: 100%;
              	padding: 10px;
            }
          .form-group label{
          		color: red;
          }
            .btn-primary{
				margin: 20px 0;
              	padding: 10px;
              	width: 50%;
              	text-align: center;
              color: red;
            }
            .art{
				width: 100%;
              	text-align: center;
            }
            .art h3{
				width: 100%;
              color: red;
            }
          	.tattoo{
				width: 25%;
				display: inline-block;
				margin: 15px 20px;
			}
			.tattoo img{
				transition:transform 0.25s ease;
                border: 1px solid black;
			}
			.tattoo img:hover{
				-webkit-transform:scale(1.5);
				transform:scale(1.5);
			}
          @media only screen and (max-width: 850px) {
          		.btn-primary{
              		width: 100%;
            }
            .tattoo{
                    width: 100%;
                }
          }
          @media only screen and (min-width: 850px) {
          		.btn-primary{
              		width: 80%;
            }
            .tattoo{
                    width: 45%;
                    display: inline-block;
                    margin: 20px 0;
                }
          }
          @media only screen and (min-width: 1200px) {
          		.btn-primary{
              		width: 50%;
            }
            .tattoo{
                    width: 25%;
                    display: inline-block;
                    margin: 15px 20px;
                }
          }
		</style>
		<script type="text/javascript">
			$(document).ready(function($){
				$('.table').DataTable();
			});
		</script>
	</head>
	<body>
      <div class="employee">
          <div class="logo">
              	<h2>Welcome <?php echo $username; ?>!</h2><a href="logout.php" id="logout" class="btn btn-danger btn-lg">Log Out</a>
          </div>
      </div>
		<div class="container">
			<div class="wrapper">
				<div class="col-md-12">
					<div class="appointments">
                      <?php if (isset($_SESSION[''])): ?>
						<div class="error success">
							<h3>
								<?php
									echo $_SESSION['success'];
									unset ($_SESSION['success']);
							?>
							</h3>
						</div>
						<?php endif ?>
                      	<h3>Appointments</h3>
						<table class='table table-hover table-responsive table-bordered table-striped text-nowrap'>
							<thead>
								<tr>
									<th>Name</th>
									<th>Phone</th>
									<th>Email</th>
									<th>Description</th>
									<th>Remove</th>
								</tr>
							</thead>
							<tbody>
								<?php
									$sql = "SELECT * FROM appointments WHERE artist = '$username' order by id";
									$result = mysqli_query($link,$sql);
									while($row = mysqli_fetch_array($result)){
										echo '<tr>
												<td>' . $row['name'] . '</td>
												<td>' . $row['phone'] . '</td>
												<td>' . $row['email'] . '</td>
												<td>' . $row['description'] . '</td>
												<td><form class="form-inline" action="apptremove.php" method="post"><input type="hidden" name="id" value="' . $row['id'] . '"><button type="submit" id="remove" class="btn btn-danger btn-xs">X</button></form></td>
										</tr>';
									}
								?>
							</tbody>
						</table>
					</div>
					<div class="submit">
						<h3><b>Add a picture to your album</b></h3>
                      	<center>
                          <form action="albuminsert.php" method="post" enctype="multipart/form-data">
                              <div class="form-group">
                                  <label>JPG, JPEG, PNG, GIF, & PDF files are allowed.</label>
                                  <input id="file" class="btn btn-primary btn-lg" type="file" name="image">
                                  <button type="submit" id="submit" class="btn btn-primary btn-lg"><b>Submit</b></button>
                              </div>
                          </form>
                      </center>
					</div>
					<div class="art">
						<h3><b>Your Tattoo Gallery</b></h3>
						<?php
							$sql= "SELECT * FROM images WHERE artist = '$username' ORDER BY id DESC";
							$result = mysqli_query($link,$sql);
							while($row = mysqli_fetch_array($result)){
								echo '<div class="tattoo"><img src="/images/' . $row['filename'] . '" height="300px" width="300px"></div>';
							}
						?>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>
