<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link href="../css/store_style.css" rel="stylesheet" type="text/css">
</head>

<body>
	<div style="height: 150px">
			<?php
	session_start();
	
	if(isset($_SESSION["user_name"])&& isset($_SESSION["email"]))
{
	

	
	
}else{
		
		header("Location:login.php");
	}
	
	
	include('./includes/navbar.php');
	include('includes/conn.php');
	?>
	
	</div>
	
	<div class="title">
		<h2>Manage Shop</h2>
	
	</div>
	<div class="additems">
	<h3>Add new item to shop</h3>
			<form id="data" method="post" enctype="multipart/form-data">
				<div class="input-wrapper">
					<div class="lable-wrapper">
					<label>Enter Item Name</label>
					</div>
					
				<input type="text" id="itemName">
				</div>
				<div class="input-wrapper">
					<div class="lable-wrapper">
					<label>Enter Item Price</label>
						</div>
					
				<input type="number" id="itemPrice">
				</div>
				<div class="input-wrapper">
					<div class="lable-wrapper">
					<label>Enter Item Quntity</label>
						</div>
				<input type="number" id="itemquntity">
				</div>
				<div class="input-wrapper">
					<div class="lable-wrapper">
					<label>Chose image</label>
						</div>
				<input type="file" id="itemImage" accept="image/x-png,image/gif,image/jpeg">
				</div>
				
				<div class="input-wrapper">
					<button type="submit">ADD ITEM</button>
				
				</div>
				
				
		</form>
	
	</div>

	<div class="title">
		<h2>All items</h2>
	</div>
	
	<div class="itemDisplay">
	<table border="0" width="100%">
	<tr>
		
		<th><h3>ID</h3></th>
		<th class="shade"><h3>item Name</h3></th>
		<th><h3>item Image</h3></th>
		<th class="shade"><h3>item Price</h3></th>
		<th><h3>quntity</h3></th>
		<th class="shade"><h3>Action</h3></th>
		
		
		</tr>
		<?php 
		
		$count =0;
		
		while($count<1){
			
			
			?>
		<tr>
		<td>1</td>
			<td class="shade">dog food</td>
			<td class="normal"><img src="../images/icons/petFood.png" height="100"></td>
			<td class="shade">rs 100.00</td>
			<td class="normal">10</td>
			<td class="shade"><button class="btn edit">Edite</button> <button class="btn remove">Remove</button></td>
		</tr>
		<tr id="<?php echo($count); ?>" style="display: none">
				<td>
						
				</td>
			<td>
				<input type="text" placeholder="dog food" >
			</td>
			<td>
			</td>
			<td></td>
		</tr>
		<?php
			
			$count++;
		}
		
		?>
		
		
	</table>
	
	</div>
	<script>
		
		$("form#data").submit(function(e){
			e.preventDefault();
			var itemName = document.getElementById("itemName").value;
			var itemPrice = document.getElementById("itemPrice").value;
			var itemquntity= document.getElementById("itemquntity").value;
			var itemImage = document.getElementById("itemImage").value;
			var imageFile = $('#itemImage')[0].files[0];
			
			var form = document.getElementById("data")
			var validExtensions = ['jpg','png','jpeg'];
			console.log(imageFile);
			
			if(itemName==""||itemPrice==""){
				
				alert("please fill all fild");
				
				return null;
			}
			
			if(itemImage==""){
				
				alert("Please select Image");
				
				return null;
			}
			var imageLow = itemImage.toLowerCase();
			
			var extention = imageLow.substring(imageLow.lastIndexOf('.')+1);
			if($.inArray(extention,validExtensions)){
				alert("extention not support");
				return null;
				
			}
			
			
			
			var formData = new FormData();
			
			formData.append('itemName',itemName);
			formData.append('itemquntity',itemquntity);
			formData.append('itemPrice',itemPrice);
			formData.append('image',imageFile);
			
			
			$.ajax({
				url: "functions/addItemfunc.php",
        type: 'POST',
        data: formData,
        success: function (data) {
            alert(data)
        },
        cache: false,
        contentType: false,
        processData: false
			});
			
			console.log(formData);
		})
		
	</script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
	
</body>
</html>