<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>

	<link href="css/makeAnAppoiment.css" rel="stylesheet" type="text/css">
</head>

<body>
	<div>
	<?php 
		include("navbar.php");
		?>
	
	</div>
	<div class="appoimentContainer">
		
		<div class="appoimentHeader">
			<center>
			<h2  >Make An Appoiment</h2>
				</center>
		
		</div>
		<form>
		
			<div class="inputGroup">
			<select id="selectbox" class="selectBox">
			<option selected>Select your pet</option>	
			<option value="cat">Cat</option>
			<option value="dog">Dog</option>
			<option value="other">other</option>
			</select>
			</div>
			
			<div class="inputGroup inputhalf">
			<input id="fname" class="inpu-text " type="text" placeholder="Enter friest Name">
			</div>
			
			<div class="inputGroup inputhalf">
			<input id="lname" class="inpu-text" type="text" placeholder="Enter Last Name">
			</div>
			<div class="inputGroup">
			<input id="email" class="inpu-text" type="email" placeholder="Enter Your Email">
			</div>
			<div class="inputGroup">
			<input	id="phone" class="inpu-text" type="tel" placeholder="Enter Your Phone Number">
			</div>
			
			<div class="inputGroup">
			<input id="date" class="inpu-text" type="date" placeholder="">
			</div>
			<div class="inputGroup" style="height: 50px; margin-left: 70%">
			<button	 type="submit" class="btnSubmit" onClick="makeAppoiment()"> Make Appoiment</button>
			
			</div>
			
			
		
		</form>
	
	</div>
	
	<script>
			function makeAppoiment(){
				
				var catogery= document.getElementById("selectbox").value;
				var fname = document.getElementById("fname").value;
				var lname = document.getElementById("lname").value;
				var phone = document.getElementById("phone").value;
				var date = document.getElementById("date").value;
				var email = document.getElementById("email").value;
		
	
				if(fname==""||lname==""|| phone==""||date==""||email==""){
					
					alert("Please fill All field");
					
					return null;
				}
				
				if(catogery =="Select your pet"){
					alert("Please select your pet");
					return null;
				}
				
				const regex = /[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?/g
		
		
		
		
		if(!regex.test(email)){
			alert("emailNot valied");
			return null;
		}
		
				if(phone.length<10)
				
				
		 $.ajax({
                        url: "function/appoimentFunctions.php", //the page containing php script
                        type: "POST",
                        data: {email,fname,lname,phone,date,catogery},
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
</body>
</html>