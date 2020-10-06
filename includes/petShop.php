<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link href="css/font.css" rel="stylesheet" type="text/css">
<link href="css/petShop.css" rel="stylesheet" type="text/css">
</head>

<body>
	<div style="z-index: 99">
	<?php 
	
	include('navbar.php');
		include('includes/conn.php');
	?>
	
	</div>
	<div class="petShop-content">
	
		<div class="row">
			
				<?php 
				
			
			$qur="SELECT * FROM `shop` ";
			
			$rslt = mysqli_query($dbcon,$qur);
			
			


while($row = mysqli_fetch_row($rslt)) {
   ?>
			<div style="z-index: 1" class="colmn" align="center">
				<div class="shp-img" style="background-image: url('shopImage/<?php echo($row[3]); ?>');z-index: 2"></div>
				<h3><?php echo($row[1]); ?></h3>
				<p><?php echo($row[2]); ?></p>
				<h4>Rs.<?php echo($row[4]); ?>.00</h4>
				
				<form>
					
					<span>Select Number of Items:</span>
					<select id="<?php echo($row[0]) ?>">
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						<option value="6">6</option>
						<option value="7">7</option>
						<option value="8">8</option>
						<option value="9">9</option>
					</select>
					
					
					<button class="addtocart" onClick="addtoCart(<?php echo($row[0].",'".$row[1]."',".$row[4]) ?>)" type="submit">Add to Cart</button> 
				
				</form>
				
			
			</div>
			<?php
    
}
?>
				
				
				
			
			
			
		
		</div>
		
	</div>
		
	<div>
	<?php 
		
		include('footer.php');
		?>
	
	</div>
	<script>
		function addtoCart(itemID,itemName,itemPrice){
			
			alert(itemID);
			
			var e = document.getElementById(itemID.toString());
			var nItems = e.options[e.selectedIndex].text;
			
			//alert(nItems);
			
			var fd = new FormData();
			
			fd.append('id',itemID);
			fd.append('amount',nItems);
			fd.append('name',itemName);
			fd.append('price',itemPrice);
			
				
			$.ajax({
				url: "function/addToCart.php",
        type: 'POST',
        data: fd,
        success: function (data) {
            alert(data)
        },
        cache: false,
        contentType: false,
        processData: false
			});
			
			
		}
	
	</script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
</body>
</html>