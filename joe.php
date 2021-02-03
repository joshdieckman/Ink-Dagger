<?php
	//joe.php

	include('config.php');

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Ink N Dagger Tattoo Co.</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
		<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
		<link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
		<link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css"/>
		<style type="text/css">
			body{
				margin: 0;
				font-family: Arial, Helvetica, sans-serif;
                font-size: 18px;
				background-color: black;
			}
			.container{
				background-image: url("/images/image1.png");
				background-position: center;
				background-repeat: no-repeat;
				background-attachment: fixed;
			}
			.employee{
				width: 100%;
				margin: 20px 0;
				height: 150px;
			}
			.login{
				width: 33%;
				display: inline-block;
				text-align: center;
			}
			.logo{
				width: 33%;
				display: inline-block;
				text-align: center;
			}
			.book{
				width: 33%;
				display: inline-block;
				text-align: center;
			}
			.artistry{
				width: 100%;
			}
			.tattoo{
				width: 25%;
				display: inline-block;
				margin: 15px 20px;
			}
			.tattoo img{
				transition:transform 0.25s ease;
			}
			.tattoo img:hover{
				-webkit-transform:scale(1.5);
				transform:scale(1.5);
			}
			.btn{
				color: white;
			}
			.btn:hover{
				color: darkred;
				font-size: 24px;
			}
			.artist1{
                width: 100%;
                text-align: left;
                height: 200px;
                padding: 5px;
                margin: 50px 0;
                color: white;
                background-color: black;
                text-shadow: 2px 2px 5px black;
                border: 1px solid black;
			}
		</style>
		<script type="text/javascript">
		</script>
	</head>
	<body>
		<div class="container">
			<div class="wrapper">
                <div class="employee">
					<div class="book">
						<a href="/php/book.php" class="btn btn-lg">Book an Appointment</a>
					</div>
					<div class="logo">
						<a href="/php/index.php"><img src="/images/tattoodoor.png" height="100px" width="100px"></a>
					</div>
					<div class="login">
						<a href="/php/welcome.php" class="btn btn-lg">Employee Login</a>
					</div>
				</div>
				<br>
				<hr>
				<br>
				<div class="col-md-12">
					<center>
						<div class="artist1">
							<h3>Joe Boyer</h3>
							<h4>Instagram: <a href="www.instagram/boyermachine.com" target="_blank">@boyermachine</a></h4>
							<h4>Style: Expert in all styles</h4>
							<h4><a href="/php/book.php" class="btn btn-lg">Book an Appointment</a></h4>
						</div>
						<br>
						<hr>
						<br>
						<div class="artistry">
							<h2 style="color: white;">Artistry</h2>
							<?php
								$sql= "SELECT * FROM images WHERE artist = 'joe' ORDER BY id ASC";
                                $result = mysqli_query($link,$sql);
                                while($row = mysqli_fetch_array($result)){
									echo '<div class="tattoo"><img src="/images/' . $row['filename'] . '" height="300px" width="300px"></div>';
								}
							?>
						</div>
						<br>
					</center>
                </div>
            </div>
		</div>
	</body>
	<footer>
		<center>
			<hr>
			<p>&copy; 2020 Ink N Dagger</p>
			<p>Contact information: <a href="info@inkndagger.com">info@inkndagger.com</a>.</p>
		</center>
	</footer>
</html>
