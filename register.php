<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
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
	<center><h1 style="color: white;"><div style="font-size: 80px;">STEPPING SCHOOL</div><div style="font-size: 40px;"><br>Student Registration.</div></h1>
	<div class="container container container-fluid" style="padding-left: 100px; padding-right: 100px;">
		<div class="jumbotron">

			<form method="POST" action="steppingschool.html">


				<label>First name:</label>
				<br>
				<input type="text" name="first_name" placeholder="enter your first name" class="form-control">
				<br>
							 
				<label>Middle name:</label>
				<br>
				<input type="text" name="middle" placeholder="enter your middle name" required="" class="form-control">
				<br>
				<label>Surname:</label>
				<br>
				<input type="text" name="surname" placeholder="enter your surname" required="" class="form-control">
				<br>
				<br>
				<center>
					<label style="padding-left: 5px;">Date Of Birth:</label> 
					<label for="Month">Month:</label>

					<select>

						<option>Jan</option>
						<option>Feb</option>
						<option>Mar</option>
						<option>Apr</option>
						<option>May</option>
						<option>Jun</option>
						<option>Jul</option>
						<option>Aug</option>
						<option>Sep</option>
						<option>Oct</option>
						<option>Nov</option>
						<option>Dec</option>
					</select>
					<label for="Day">Day:</label>
					<input type="Number" name="Day" required="">

					<label for="Year">Year:</label>
					<input type="text" name="Year" required="">
					<br>
					<br>
					<label>Gender:</label>
					<select>
						<option>Male</option>
						<option>Female</option>
							
					</select>
					<br>
					<br>
					<label for="Phone Number">Parents Phone Number:</label>
					<br>
					<select>
						<option>+254</option>
						
					</select>

					<input type="text" name="Phonenumber" required="">
					<br>
					<br>
					<label for="Phone Number">Alternative parents Phone Number:</label>
					<br>
					<select>
						<option>+254</option>
						
					</select>

					<input type="text" name="Phonenumber" required="">
					<br>
					<br>
					
										
					<button type="submit" class="btn btn-success">Submit</button>

					<button type="reset" class="btn btn-danger">Cancel</button>
				</center>


			</form>
		</div>
	</div>


</body>

</html>