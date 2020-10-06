<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Pets Love Admin</title>
</head>

<body>
	
	<?php
	session_start();
	
	if(isset($_SESSION["user_name"])&& isset($_SESSION["email"]))
{

	header("Location:dashboard.php");
	
}else{
		
		header("Location:login.php");
	}
	
	
	
	?>
	
</body>
</html>