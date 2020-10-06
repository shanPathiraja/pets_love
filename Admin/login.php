<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link href="css/login.css" rel="stylesheet" type="text/css">
<link href="css/font.css" rel="stylesheet" type="text/css">
</head>

<body>
	<?php
	session_start();
//echo($_SESSION["user_name"]);
if(isset($_SESSION["user_name"])&& isset($_SESSION["email"]))
{
	echo($_SESSION["user_name"]);
	header("Location:dashboard.php");
	
}
	
	?>
	
	
	<div class="login-container">
	<div class="inner-container">
		
		<form  >
			<h2 align="center">Pets Love Login</h2>
			<div class="l-input-group">
				<input class="l-input" type="email" id="email" placeholder="Enter Email">
				
			
			</div>
			<div class="l-input-group">
				
				<input class="l-input"  type="password" id="password" placeholder="Enter Password">
			
			</div>
			<div class="l-input-group-btn">
				
				<button class="l-input" type="submit" value="submit" onClick="frmLoginSubmit()">Login</button>
			
			</div>
		
		</form>
		
		</div>
	
	
	</div>
	<script>
		function frmLoginSubmit(){
		var emailValue= document.getElementById("email").value
		var passwordValue = document.getElementById("password").value
		
		const regex = /[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?/g
		
		
		
		
		if(!regex.test(emailValue)){
			alert("emailNot valied");
			return null;
		}
		 $.ajax({
                        url: "functions/loginFunction.php", //the page containing php script
                        type: "POST",
                        data: {email:emailValue,password:passwordValue},
                        beforeSend: function () {
                            $('#right').html('checking');
                        },			//request type
                        success: function (result) {
                            alert(result);
                            //location.reload();
                        }
                    });
		
		
	}
		
	</script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="js/jquery/jquery.min.js"/>
</body>
</html>