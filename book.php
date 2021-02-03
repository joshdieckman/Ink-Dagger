<?php
	//book.php

	include('config.php');

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
				margin: 0;
				font-family: Arial, Helvetica, sans-serif;
                font-size: 18px;
				background-color: black;
                background-image: url("/images/inkanddagger.png");
				background-position: center;
				background-repeat: no-repeat;
				background-attachment: fixed;
			}
            .container{
                width: 100%;
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
          .form-group{
          	width: 50%;
          }
          .form-control{
            width: 100%;
          	margin: 10px 0;
            font-size: 20px;
          }
          #select{
          	font-size: 18px;
          }
          h3{
          	color: white;
            text-shadow: 2px 2px black;
          }
          .btn{
          	width: 100%;
            margin: 10px 0;
            padding: 10px;
            font-size: 20px;
          }
          label{
          	color: white;
            text-shadow: 2px 2px black;
          }
          span{
          	color: white;
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
            @media only screen and (max-width: 768px) {
                body{
                    font-size: 24px;
                }
                .employee{
                    height: 250px;
                }
                .footer{
                    height: 450px;
                }
                .address, .watermark{
                    width: 100%;
                    margin: 10px 0;
                }
                .verticalline{
                    display: none;
                }
                .tattoo{
                    width: 100%;
                }
                .login, .book, .logo{
                    width: 100%;
                    display: block;
                    text-align: center;
                }
                .login, .logo{
                    margin-top: 10px;
                }
            }
            @media only screen and (min-width: 768px) {
                body{
                    font-size: 24px;
                }
                .employee{
                    height: 250px;
                }
                .footer{
                    height: 450px;
                }
                .address, .watermark{
                    width: 100%;
                    display: block;
                    margin: 10px 0;
                }
                .verticalline{
                    display: none;
                }
                .tattoo{
                    width: 45%;
                    display: inline-block;
                    margin: 20px 0;
                }
                .login, .book, .logo{
                    width: 100%;
                    display: block;
                    text-align: center;
                }
                .login, .logo{
                    margin-top: 10px;
                }
            }
            @media only screen and (min-width: 1200px) {
                body{
                    font-size: 24px;
                }
                .employee{
                    height: 125px;
                }
                .login, .book, .logo{
                    width: 32%;
                    display: inline-block;
                    text-align: center;
                }
                .tattoo{
                    width: 25%;
                    display: inline-block;
                    margin: 15px 20px;
                }
                .footer{
                    width: 100%;
                    margin-top: 20px;
                    height: 225px;
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
                    height: 175px;
                    width: 3%;
                    display: inline-block;
                    margin-top: 25px;
                }

            }
		</style>
		<script type="text/javascript">
		</script>
	</head>
	<body>
         <div class="employee">
                <div class="book">
                        <a href="/ind/book.php" class="btn btn-lg">Book an Appointment</a>
		</div>
		<div class="logo">
                        <a href="/ind/index.php"><img src="/images/tattoodoor.png" height="100px" width="100px"></a>
		</div>
		<div class="login">
			<a href="/ind/welcome.php" class="btn btn-lg">Employee Login</a>
		</div>
	</div>
        <br>
        <div class="container">
			<div class="wrapper">
                <div class="col-md-12">
                    <center>
						<form class="form-group" method="post" action="appointments.php">
							<label>Name</label>
							<input id="name" class="form-control" type="text" name="name" placeholder="First/Last Name" required>
							<label>Phone</label>
							<input id="phone" class="form-control" type="text" name="phone" placeholder="Phone" required>
							<label>Email</label>
							<input id="email" class="form-control" type="text" name="email" placeholder="Email" required>
                          	<label>Artist</label>
							<select id="select" class="form-control" name="artist">
								<option value="">Choose an Artist</option>
								<?php
									$sql= "SELECT DISTINCT username FROM users ORDER BY id";
									$result = mysqli_query($link,$sql);
									while($row = mysqli_fetch_array($result)){
										echo '<option value="' . $row['username'] . '">' . $row['username'] . '</option>';
									}
								?>
							</select>
							<label>Placement</label>
							<input id="placement" class="form-control" type="text" name="placement" placeholder="Which part of your body" required>
							<label>Description</label>
							<textarea id="description" class="form-control" type="text" maxLength="250" name="description" cols="5" rows="5" placeholder="Brief Description" required></textarea>
							<span id="chars" class="pull-left" style="margin: 5px 0 5px 5px;">250</span><span class="pull-left" style="margin: 5px 0 5px 0;">/250</span>
							<button type="submit" id="submit" class="btn btn-primary">Submit</button>
							<a href="/ind/index.php" class="btn btn-danger">Exit</a>
						</form>
					</center>
				</div>
			</div>
		</div>
	</body>
	<script>
		var maxLength = 250;
		$('textarea').keyup(function(){
			var textlen = maxLength - $(this).val().length;
			$('#chars').text(textlen);
		});
	</script>
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
					<a href="https://www.dieckmandesigns.com" target="_blank"><img src="/images/Dieckman Designs Logo.png" height="150px" width="150px"></a>
				</div>
            </div>
		</center>
	</footer>
</html>
