<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>pets Love Dashboard</title>
<link href="css/dashboardStyle.css" rel="stylesheet" type="text/css">
</head>

	
	
<body>
	<div>
	<?php
	session_start();
	
	if(isset($_SESSION["user_name"])&& isset($_SESSION["email"]))
{
	

	
	
}else{
		
		//header("Location:login.php");
	}
	
	
	include('./includes/navbar.php');
	?>
	
	</div>
	
	<div class="main">
	<h1>Pets Love Dashboard</h1>
		
		<div class="view shopView"> 
			<div>
				<h3>New Notifications</h3>
			</div>
		
		</div>
		<div class="view Appoiments">
		<div>
				<h3>New Notifications</h3>
			</div>
		
		</div>
	
	</div>
	
	<div class="fotter">
		
		<div class="developer">
		<p>developed by: P.M.B.P. Pathiraja</p>
			<p>index: ANU/IT/2018/F/008</p>
			<p>Course: HNDIT-2nd Year</p>
			<p>Tp: 0716017460</p>
			<P>Email:Shanb11170@gmail.com</P>
		
		</div>
	
	
	</div>
	
	
	
	
	
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
</body>
</html>