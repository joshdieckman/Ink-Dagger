<?php
	//index.php

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
          h1{
          	color: red;
            margin: 15px 0;
            text-shadow: 2px 2px black;
          }
            #myCarousel{
                width: 100%;
            }
            #slide{
                height: 500px;
            }
          .carousel-indicators{
          	z-index: 1;
          }
			.employee{
				width: 100%;
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
                                border: 1px solid black;
			}
			.tattoo img:hover{
				-webkit-transform:scale(1.5);
				transform:scale(1.5);
			}
                  .footer{
                        width: 100%;
                        background-image: url("/images/banner.png");
                        background-position: center;
                        background-repeat: repeat;
                        color: gray;
                  }
                  .address{
                          display: inline-block;
                          float: left;
                          text-align: center;
                          width: 45%;
                  }
                  .watermark{
                          display: inline-block;
                          float: right;
                          width: 45%;
                          text-align: center;
                  }
                  .verticalline {
                          border-left: 1px solid gray;
                          width: 3%;
                          display: inline-block;
                  }
                  @media only screen and (max-width: 768px) {
                          body{
                                font-size: 24px;
                          }
                    		.container{
                  				margin-top: 250px;
                			}
                          .employee{
                                  height: 250px;
                          }
                          #myCarousel{
                                width: 100%;
                                height: 350px;
                          }
                          #slide{
                                  height: 300px;
                          }
                          .footer{
                                  height: 350px;
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
                    	.container{
                  				margin-top: 250px;
                			}
                          .employee{
                                  height: 250px;
                          }
                          #myCarousel{
                                width: 100%;
                                height: 350px;
                          }
                          #slide{
                                  height: 300px;
                          }
                          .footer{
                                  height: 350px;
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
                          #myCarousel{
                                width: 80%;
                                height: 500px;
                          }
                          #slide{
                                  height: 500px;
                          }
                    		.container{
                  				margin-top: 125px;
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
                                height: 175px;
                          }
                          .address{
                            	display: inline-block;
                          		float: left;
                          		text-align: center;
                          		width: 45%;
                            	margin-top: 20px;
                          }
                          .watermark{
                            	display: inline-block;
                          		float: right;
                          		width: 45%;
                          		text-align: center;
								margin-top: 20px;
                          }
                          .verticalline {
                                border-left: 1px solid gray;
                          		width: 3%;
                          		display: inline-block;
                            	height: 140px;
                            	margin-top: 20px;
                          }

                  }
		</style>
		<script type="text/javascript">
		</script>
	</head>
	<body>
         <div class="employee">
                <div class="book">
                        <a href="/dagger/book.php" class="btn btn-lg">Book an Appointment</a>
		</div>
		<div class="logo">
                        <a href="/dagger/index.php"><img src="/images/tattoodoor.png" height="100px" width="100px"></a>
		</div>
		<div class="login">
			<a href="/dagger/welcome.php" class="btn btn-lg">Employee Login</a>
		</div>
	</div>
        <br>
        <div class="container">
			<div class="wrapper">
                <div class="col-md-12">
                    <center>
                      <h1>Ink & Dagger Tattoo Company</h1>
                        <div id="myCarousel" class="carousel slide" data-ride="carousel">
                            <!-- Indicators -->
							<ol class="carousel-indicators">
								<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
								<li data-target="#myCarousel" data-slide-to="1"></li>
								<li data-target="#myCarousel" data-slide-to="2"></li>
                                                                <li data-target="#myCarousel" data-slide-to="3"></li>
                                                                <li data-target="#myCarousel" data-slide-to="4"></li>
							</ol>
							<!-- Wrapper for slides -->
							<div class="carousel-inner">
								<div class="item active">
									<img src="/images/image1.png" alt="Image 1" id="slide">
									<div class="carousel-caption">
										<h2>Joe Boyer</h2>
									</div>
								</div>
								<div class="item">
									<img src="/images/image2.png" alt="Image 2" id="slide">
									<div class="carousel-caption">
										<h2>Artist 2</h2>
									</div>
								</div>
								<div class="item">
									<img src="/images/image3.png" alt="Image 3" id="slide">
									<div class="carousel-caption">
										<h2>Artist 3</h2>
                                    </div>
								</div>
								<div class="item">
									<img src="/images/image4.png" alt="Image 4" id="slide">
									<div class="carousel-caption">
										<h2>Artist 4</h2>
                                    </div>
								</div>
								<div class="item">
									<img src="/images/image5.png" alt="Image 5" id="slide">
									<div class="carousel-caption">
										<h2>Artist 5</h2>
                                    </div>
								</div>
								<!-- Left and right controls -->
								<a class="left carousel-control" href="#myCarousel" data-slide="prev">
									<span class="glyphicon glyphicon-chevron-left"></span>
									<span class="sr-only">Previous</span>
								</a>
								<a class="right carousel-control" href="#myCarousel" data-slide="next">
									<span class="glyphicon glyphicon-chevron-right"></span>
									<span class="sr-only">Next</span>
								</a>
							</div>
						</div>
						<br>
                                                <hr>
                                                <br>
						<div class="artistry">
							<h2 style="color: red; text-shadow: 2px 2px black;">Artistry</h2>
							<?php
								$sql= "SELECT * FROM images ORDER BY id ASC";
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
                        <div class="footer">
                                <div class="address">
                                        <h4 class="glyphicon glyphicon-map-marker"> Ink and Dagger Tattoo Company</h4>
                                        <h5>2239 Bardstown Rd</h5>
                                        <h5>Louisville, KY 40205</h5>
                                        <h5>(502) 614-8666</h5>
                                </div>
                                <div class="verticalline"></div>
                                <div class="watermark">
                                        <h4>Powered by: </h4>
                                        <a href="https://www.dieckmandesigns.com" target="_blank"><img src="/images/Dieckman Designs Logo.png" height="100px" width="100px"></a>
                                </div>
                        </div>
		</center>
	</footer>
</html>
