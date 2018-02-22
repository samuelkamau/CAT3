<!DOCTYPE html>
<html>
<head>
	<title>Grading</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	
</head>
<body>
	<center><h2 style="font-size: 50px; font-family: sans-serif;">Grading System</h2></p>
	<p style="font-size: 18px;">This grading system allows you to gauge yourself as a learner and know where you at in your learning.</p>
	</p>
	<div class="container container-fluid">
		<div class="jumbotron">
			<form method="GET">
				<div style="margin-left: 50px;">
					<center>
					<label>English:</label>
					<br>
					<input type="number" name="en" placeholder="enter your marks" required="">
					<br>
					<br>
					<label>Kiswahili:</label>
					<br>
					<input type="number" name="ki" placeholder="enter your marks" required="">
					<br>
					<br>
					<label>Mathematics:</label>
					<br>
					<input type="number" name="ma" placeholder="enter your marks" required="">
					<br>
					<br>
					<label>Science:</label>
					<br>
					<input type="number" name="sc" placeholder="enter your marks" required="">
					<br>
					<br>
					<label>Social Studies:</label>
					<br>
					<input type="number" name="ss" placeholder="enter your marks" required="">
					<br>
					<br>
					<label>Music:</label>
					<br>
					<input type="number" name="mu" placeholder="enter your marks" required="">
					<br>
					<br>
					<label>Computer Studies:</label>
					<br>
					<input type="number" name="co" placeholder="enter your marks" required="">
					<br>
					<br>
					</center>
					<center><button class="btn btn-info" type="submit">Submit</button></center>
					<br>
					<center>
					<?php
						$result=($_GET['en']+$_GET['ki']+$_GET['ma']+$_GET['sc']+$_GET['ss']+$_GET['mu']+$_GET['co']);
						$mean=$result/7; 
						echo "$m
						ean";
						echo "<br>";

						if (isset($_GET['mean'])) {
	 							# code...
	                    	$mean=$_GET['mean'];
          					 } 
          					 if ($mean>80) {
          					 	# code...
          					 	echo "You Have an A. Congratulations";
          					 }elseif ($mean>=74) {
          					 	# code...
          					 	echo "You Have an A-";
          					 }elseif ($mean>=69) {
          					 	# code...
          					 	echo "You Have an B+";
          					 }elseif ($mean>=64) {
          					 	# code...
          					 	echo "You Have an B";
          					 }elseif ($mean>=59) {
          					 	# code...
          					 	echo "You Have an B-";
          					 }elseif ($mean>=54) {
          					 	# code...
          					 	echo "You Have an C+";
          					 }elseif ($mean>=49) {
          					 	# code...
          					 	echo "You Have an C";
          					 }elseif ($mean>=44) {
          					 	# code...
          					 	echo "You Have an C-";
          					 }elseif ($mean>=39) {
          					 	# code...
          					 	echo "You Have an D+";
          					 }elseif ($mean>=34) {
          					 	# code...
          					 	echo "You Have an D";
          					 }elseif ($mean>=29) {
          					 	# code...
          					 	echo "You Have an D-";
          					 }elseif ($mean>=20) {
          					 	# code...
          					 	echo "You Have an E";
          					 }else{
          					 	echo "you have falied your exam.";
          					 }



					 ?>
					 </center>
					 

					
				</div>
				
			</form>
			
		</div>
		
	</div>

</body>
</html>