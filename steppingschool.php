<!DOCTYPE html>
<html>
<head>
	<title>stepping school-we deliver nothing but the best</title>
	
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/fontawesome.css">
	<link rel="stylesheet" type="text/css" href="css/fontawesome-all.css">
	<link rel="stylesheet" type="text/css" href="css/fa-solid.css">
	<link rel="stylesheet" type="text/css" href="css/fa-svg-with-js.css">
	<link rel="stylesheet" type="text/css" href="css/fa-brands.css">
	<link rel="stylesheet" type="text/css" href="css/fa-regular.css">
	<script src="js/fontawesome.js"></script>
	<script src="js/fa-solid.js"></script>
	<script src="js/jquery.min.js"></script>
	<script src="js/fontawesome-all.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/index.js"></script>	
	
	<style type="text/css">
	body{
		margin: 0;
		padding: 0;
		background: white;
	}
	#menu{
		margin: 0;
		padding: 0;
	}
	#menu li{
		list-style: none;
		display: inline-block;
	}
	#menu li a{
		text-decoration: none;
		position: relative;
		color: #313131;
		font-size: 26px;
		font-weight: none;
		font-family: Florentia;

		display:block;
		overflow: hidden;
		transition: 0.7s all;
		padding: 8px 16px;
	}
	#menu li a:before{
		content: '';
		width: 60px;
		position: absolute;
		border-bottom: 3px solid #313131;
		bottom: 0;
		right: 350px;
		transition: 0.7s all;

	}
	#menu li a:hover:before{
		right: 0;

	}
	#menu li a:hover{
		color: #0A122A;
	}
	.carousel-inner img {
		width: 100%;
		height: 80%;
	}
	#mission:hover{
		text-decoration: underline;
	}
	#vision:hover{
		text-decoration: underline;
	}


</style>

</head>
<body>

	
	<ul id="menu">
		<div class="navbar navbar-header"">
			<h1 style="font-size: 40px; font-weight: bold;">STEPPING SCHOOL</h1>

		</div>
		<div>
		<div style="margin-top: 50px;">
			<ul>			
				<li><a href="#demo" class="active">Home</a></li>
				<li><a href="#mission">Our mission</a></li>
				<li><a href="#vision">Our vision</a></li>
				<li><a href="grading.php">Grading System</a></li>
			</ul>
		</div>
		<div style="text-align: right;">

			<li><a href="login.php">Login</a></li>
			<li><a href="register.php">Register</a></li>
		</div>	
	</ul>
	</div>
	<hr>
	
	<div>
		<center><h2 style="font-size: 70px;">WELCOME TO STEPPING SCHOOL</h2>
			<p style="font-size: 30px;">SCHOOL MOTTO: <q>DELIVER NOTHING BUT THE BEST.</q></p>
		</center>
	</div>
	<div id="demo" class="carousel slide" data-ride="carousel">

		<!-- Indicators -->
		<ul class="carousel-indicators">
			<li data-target="#demo" data-slide-to="0" class="active"></li>
			<li data-target="#demo" data-slide-to="1"></li>
			<li data-target="#demo" data-slide-to="2"></li>
		</ul>

		<!-- The slideshow -->
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img src="pics/pup.jpg" alt="Los Angeles" width="1100" height="400">

			</div>
			<div class="carousel-item">
				<img src="pics/weh.jpg" alt="Chicago" width="1100" height="400">
			</div>
			<div class="carousel-item">
				<img src="pics/comp.jpg" alt="New York" width="1100" height="400">
			</div>
			<div class="carousel-item">
				<img src="pics/swim.jpg" alt="New York" width="1100" height="400">
			</div>
			<div class="carousel-item">
				<img src="pics/lib.jpg" alt="New York" width="1100" height="400">
			</div>
			<div class="carousel-item">
				<img src="pics/child.jpg" alt="New York" width="1100" height="400">
			</div>
			<div class="carousel-item">
				<img src="pics/class.jpg" alt="New York" width="1100" height="400">
			</div>
			<div class="carousel-item">
				<img src="pics/beauti.jpg" alt="New York" width="1100" height="400">
			</div>

		</div>

		<!-- Left and right controls -->
		<a class="carousel-control-prev" href="#demo" data-slide="prev">
			<span class="carousel-control-prev-icon"></span>
		</a>
		<a class="carousel-control-next" href="#demo" data-slide="next">
			<span class="carousel-control-next-icon"></span>
		</a>
	</div>
	<br>
	<br>
	<br>
	<br>
	<br>
	<fieldset>
		<div class="row">
			<div class="container-fluid">
			<div class="col-sm-6">

				<h2 style="font-size: 50px" id="mission">Our Mission</h2>
				<p style="font-size: 19px;">The Stepping School prepares students to understand, contribute to, and succeed in a rapidly changing society, thus making the world a better and more just place. We will ensure that our students develop both the skills that a sound education provides and the competencies essential for success and leadership in the emerging creative economy. We will also lead in generating practical and theoretical knowledge that enables people to better understand our world and improve conditions for local and global communities. </p>
			</div>


			<div class="col-sm-6">
				<h2 style="font-size: 50px;" id="vision"> Our Vision</h2>
				<p style="font-size: 19px;">We are and will be a university where design and social research drive approaches to studying issues of our time, such as democracy, urbanization, technological change, economic empowerment, sustainability, migration, and globalization. We will be the preeminent intellectual and creative center for effective engagement in a world that increasingly demands better-designed objects, communication, systems, and organizations to meet social needs.
					<ul>

					<li style="font-size: 19px;">Our vision aligns with shifts in the global economy, society, and environment, which animates our mission and our values.</li>

					<li style="font-size: 19px;">Creativity, innovation, and a desire to challenge the status quo will affect what and how we teach and the intellectual ambitions of the university itself.</li>
					<li style="font-size: 19px;">Social engagement should orient students' academic experiences to help them become critically engaged citizens, dedicated to solving problems and contributing to the public good.</li>
					</ul>
				<p style="font-size: 19px;">The Stepping School must embrace these principles and innovate to address shifts in the global economy, society, and environment that require individuals to grapple with complex problems, pursue more fluid and flexible career pathways, and collaboratively create change.</p></p> </div>
				</div>
			</div>

		</fieldset>
		<br>
		<br>
		<br>
		<br>
		<div style="background-color: black;"> 
			<table>
				<br>
				<br>
				<div class="row">
					<div class="col-sm-4">

						<label style="color:#00BFFF;font-size: 22px;font-weight: normal; margin-left: 10px;"><u> You can visit Our Social Media pages at:</u></label>
						
						<br>
						<a href="https://twitter.com/"><img src="pics/twit.jpg" style="height: 50px;width: 50px; padding: 10px;"></a>
						<br>
						<a href="https://facebook.com/"><img src="pics/face.ico" style="height: 50px;width: 50px; padding: 10px;" ></a>
						<br>
						<a href="https://ke.linkedin.com/"><img src="pics/link.jpg"  style="height: 50px;width: 50px; padding: 10px;"></a>
						</div>
						<div class="col-sm-4">
							<label style="color:#00BFFF; font-size: 22px;font-weight: normal;"><u> You may also contact us for any more inquiries at:</u></label>
							
							<p style="color: #D8D8D8; font-size: 14px">+254707421328</p>
							
							<p style="color:  #D8D8D8; font-size: 14px;">+254703123657</p>
							
							<p style="color: #D8D8D8; font-size: 14px;">+254720454234</p>
							<br>



						</div>
						<div class="col-sm-4">
							<label  style="color:#00BFFF; font-size: 22px;font-weight: normal;"><u>Email us at:</u></label>
							<br>
							<a href="13105samkamau.gmail.com" style="font-size: 16px;color: #D8D8D8;">Stepping School Email Address</a>


						</div>
						</div>
						<center>
							<br>
							<br>
							<br>
							<br>
							<br>
							<br>
							<br>
							<br>
							<br>
							<br><br><br><br>

						<footer>
							<p style="color: white; font-size: 15px;">&#169; 2018 Stepping School | All Rights Reserved.</p>
						</footer>
						</center>
						</table>
						</div>

						</body>
						</html>