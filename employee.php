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
			}
			.wrapper{
				width: 100%;
				padding: 20px;
			}.
			.appointments, .submit, .art{
				width: 100%;
			}

			.footer{
                width: 100%;
				margin-top: 20px;
				height: 200px;
                background-image: url("/images/banner.png");
                background-position: center;
                background-repeat: no-repeat;
                color: gray;
            }
			.address{
                display: inline-block;
                float: left;
                text-align: center;
                width: 45%;
                padding: 30px;
            }
            .watermark{
                display: inline-block;
                float: right;
                width: 45%;
                text-align: center;
            }
            .verticalline {
                border-left: 1px solid gray;
                height: 150px;
                width: 3%;
                display: inline-block;
                margin-top: 25px;
            }
          	.employee{
                width: 100%;
                height: 150px;
                background-image: url("/images/banner.png");
                background-position: center;
                background-repeat: no-repeat;
                box-shadow: 4px 3px 8px 1px black;
            }
            .employee a{
                color: gray;
            }
            .employee a:hover{
                color: white;
            }
            .logo{
                width: 100%;
                display: inline-block;
                text-align: center;
                margin-top: 20px;
            }
          	.col-md-12{
          		width: 100%;
              	margin: 25px 0;
              	text-align: center;
          	}
            .col-md-12 h3, .col-md-12 a, .col-md-12 h2{
				display: inline-block;
              	margin: 10px;
            }
          	.col-md-12 a{
              	margin-top: -5px;
            }
            .table{
				color: black;
              	background-color: lightgray;
              	text-align: left;
            }
            .table btn-danger{
				text-align: center;
            }
            .submit label{
                 margin: 10px 0;
            }
            .form-group{
				width: 50%;
              	padding: 10px;
              	text-align: center;
            }
            .btn-primary{
				margin: 20px 0;
              	padding: 10px;
              	width: 50%;
            }
            .art{
				width: 100%;
              	text-align: center;
            }
            .art h3{
				width: 100%;
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
              	<a href="/dagger/index.php"><img src="/images/tattoodoor.png" height="100px" width="100px"></a>
            <form action="reset.php" method="post">
            	<input type="hidden" name="id" value="<?php echo $username; ?>">
              	<button type="submit" name="new-password" class="btn btn-danger btn-lg">New Password?</button>
            </form>
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
                      	<div class="col-md-12">
							<h2>Welcome <?php echo $username; ?>!</h2><a href="logout.php" class="btn btn-danger btn-lg">Log Out</a>
                      	</div>
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
												<td><form class="form-inline" action="apptremove.php" method="post"><input type="hidden" name="id" value="' . $row['id'] . '"><button type="submit" id="submit" class="btn btn-danger btn-xs">X</button></form></td>
										</tr>';
									}
								?>
							</tbody>
						</table>
					</div>
					<div class="submit">
						<h3>Add a picture to your album</h3>
                      	<center>
                          <form action="albuminsert.php" method="post" enctype="multipart/form-data">
                              <div class="form-group">
                                  <label>JPG, JPEG, PNG, GIF, & PDF files are allowed.</label>
                                  <input id="file" class="form-control" type="file" name="image">
                                  <button type="submit" id="submit" class="btn btn-primary btn-lg">Submit</button>
                              </div>
                          </form>
                      </center>
					</div>
					<div class="art">
						<h3>Your Tattoo Gallery</h3>
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
	<footer>
		<center>
            <div class="footer">
                <div class="address">
                    <h4 class="glyphicon glyphicon-map-marker"> Ink and Dagger Tattoo Company</h4>
                    <h5>1137 Bardstown Rd Ste 2</h5>
                    <h5>Louisville, KY 40204</h5>
                    <h5>(502) 614-8666</h5>
                </div>
                <div class="verticalline"></div>
                <div class="watermark">
                    <h4>Powered by: </h4>
                    <img src="/images/Dieckman Designs Logo.png" height="150px" width="150px">
                </div>
            </div>
		</center>
	</footer>
</html>
