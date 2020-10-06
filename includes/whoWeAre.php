<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>petsLove Hospital</title>
<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet"> 
<link href="css/whoWeAre.css" rel="stylesheet" type="text/css">
<link href="css/font.css" rel="stylesheet" type="text/css">
</head>

<body>
	<div>
	<?php 
	
	include('navbar.php');
	?>
	
	</div>
	
	<div class="mainDiv">
	
	<div class="wh-content">
				
				<ul>
					<li>Advanced Laboratory</li>
					<li>Digital X Ray & Ultrasound
Scanning</li>
					<li>Field Surgery & Vaccination
Unit</li>
					
				</ul>
		
		</div>
		
		<div class="ourTeam">
			
			<h2 align="center" style="background-color:white;padding-top: 20px;padding-bottom: 20px">OUR TEAM</h2>
			
			<div class="container">
					<?php 
			
			
			include('./includes/conn.php');
			$qur ="SELECT * FROM `staf_data`";
			
			
			$result = mysqli_query($dbcon, $qur);
			
			//var_dump($result);
			
			while($row = mysqli_fetch_row($result)){
				
				
				?>
			
						<div class="col" align="center">
					
							<img src="images/<?php echo($row[3]); ?>">
							<span>
								<?php echo($row[1]); ?>
								
							</span>
							<br>
							<span>
							<?php echo($row[2]); ?>
							</span>
					</div>
				
				
				<?php
				
				
			}
			
			?>
			
			
			</div>
		
		</div>
	
	</div>
	
	<div>
	<?php 
		
		include('footer.php');
		?>
	
	</div>
	
	
</body>
</html>