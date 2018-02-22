<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	
  <style type="text/css">
  		body{
  			background-image: url(pics/photo.jpg);
  			background-repeat: no-repeat;
  			background-size: 100%;
  		}

  </style>
</head>

<body>
	<center><h1 style="color: white;"><div style="font-size: 80px;">STEPPING SCHOOL</div><div style="font-size: 40px;"><br>Student Login.</div></h1></center>
	<div class="container container container-fluid " style="padding-left: 40px; padding-right: 40px;">
		<div class="jumbotron">
		<form method="POST" action="steppingschool.html">
			<label style="font-size: 18px;">Name:</label>
			<br>


				<input type="text" name="name" placeholder="enter your full name" class="form-control" required="" >

				
				 <br>			 
				
				<label style="font-size: 18px;">Class:</label>
				<br>
				<input type="number" name="Admission" placeholder="enter your class" class="form-control" required="" >
				<br>
				<br>

				<label  style="font-size: 18px;">Admission Number:</label>
				<br>

				<input type="number" name="Admission" placeholder="enter your admission number" class="form-control" required="">
				<br>
				<br>
				<button type="submit" class="btn btn-success">Submit</button>

					<button type="reset" class="btn btn-danger">Cancel</button>
		</form>
		</div>
	</div>


</body>
</html>