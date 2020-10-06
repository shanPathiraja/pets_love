<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link href="css/navbar.css" rel="stylesheet" type="text/css">
<link href="css/font.css" rel="stylesheet" type="text/css">
<link href="css/cartStyle.css" rel="stylesheet" type="text/css">
</head>

<body>
	
	<nav>
		<div class="top">
			<div class="top-inner">
			<div class="top-content" ><i><img class="nav-content-icon" src="images/icons/icons8_envelope_26px.png"></i> <span class="email">info@petslove.lk </span></div>
			<div class="divider">
			<span>|</span>
				</div>
				
			<div class="top-content" ><i><img class="nav-content-icon" src="images/icons/icons8_phone_64px.png"></i> <span class="email">+94 7123456789 </span></div>
				<div class="divider">
			<span>|</span>
				</div>
				<div class="top-content" style="width: 16rem" ><i><img class="nav-content-icon" src="images/icons/icons8_clock_30px.png"></i> <span class="email">Working hrs.:8am to 8pm (daily) </span></div>
				<div class="top-content" style="width: 15rem; float: right" >
					<i><img class="nav-content-icon" src="images/icons/icons8_facebook_32px.png"></i> 
				<i><img class="nav-content-icon" src="images/icons/icons8_google_plus_24px.png"></i>
				<i><img class="nav-content-icon" src="images/icons/icons8_twitter_circled_50px_1.png"></i>
					<i><img class="nav-content-icon" src="images/icons/icons8_youtube_100px.png"></i>
				</div>
			</div>
			
		</div>
		<div class="second" id="second">
			<div class="second-inner">
			<div class="logo">
			
			
			</div>
				
				<div class="nav-items">
					<ul>
						<li><a id="navItem" class=""href="index.php">HOME</a></li>
						<li><a id="navItem1" class="" href="whoWeAre.php">WHO WE ARE</a></li>
						<li><a id="navItem2" class="" href="ourService.php">OUR SERVICES</a></li>
						<li><a id="navItem3" class="" href="petShop.php">PET SHOP</a></li>
						<li><a id="openCart" onClick="cartToggle()">VIEW CART</a></li>
					</ul>
			</div>
			</div>
		<?php 
			
			
session_start();

if(!isset($_SESSION['cart'])){
    $_SESSION['cart']=array();
}else{
	
}
			
			?>
			<div class="cart-TopContainer" id="cart" style="display: none">
			<div  class="cart-outerContainer"  style="z-index: 99;">
			<img style="z-index: 100" src="images/s-cart.png"/>
			<div  class="cart-container">
				
				
				
				<div clas="items">
				
					<?php
					$total = 0.00;
					
					if(count($_SESSION['cart'])>0){
						
						//var_dump($_SESSION['cart']);
						
						?>
					<table width="200">
					<tr>
						<th align="left">Item</th>
						<th align="left">Qntity</th>
						<th align="left">Price</th>
						<th align="left">Remove</th>
					</tr>
					<?php
						//echo("cart display");
						foreach($_SESSION['cart'] as $row){
							?>
					
					<tr>
					<td><?php echo($row['title']); ?></td>
						<td><?php echo($row['quntity']); ?></td>
						<td>Rs.<?php echo($row['price']); ?>.00</td>
						<td><button onClick="removeitem(<?php echo($row['id']); ?>)">Remove</button></td>
						
					</tr>
					
					<?php
							$total+= bcadd($row['price'],'0',2);
						}
						
						?>
						</table>
					
					<div class="total-Price">
						
						<span style="float: left"> total Price</span>
						<span style="float: right"> Rs <?php echo($total); ?>.00</span>
					
					</div>
					
					<div class="Check-Out">
						
						<button class="btn-Check-Out">Check Out Now</button>
						
						<button class="btn-clear" onClick="clearcart()">Remove All</button>
					
					</div>
					
						
						
						<?php
					}
					else{
						?>
						
						<h3>There is no item in the cart</h3>
						<?php
						
					}
					?>
					
				
					
						
					
				
				</div>
			
			
			
			</div>
			</div>
			
			
			</div>
			
			
			
		
		</div>
	
	</nav>
	<script>
		
		function clearcart(){
			$.ajax({
				url: "function/ClearCart.php",
        type: 'POST',
       
        success: function (data) {
            alert(data)
			location.reload();
        },
        cache: false,
        contentType: false,
        processData: false
			});
		
		}
		
	function removeitem(id){
		
		var fd = new FormData();
		
		fd.append('id',id);
		
			$.ajax({
				url: "function/cartRemoveItem.php",
        type: 'POST',
        data: fd,
        success: function (data) {
            alert(data)
			location.reload();
        },
        cache: false,
        contentType: false,
        processData: false
			});
		
		
	}
	
	
	</script>
	<script>
		
		function cartToggle(){
			
			
			var style = window.getComputedStyle(cart);
			var sval = style.getPropertyValue('display');
			var element = document.getElementById("openCart");
			
			if(sval==='block'){
				
				document.getElementById("cart").style.display='none';
				 element.classList.remove("active");
			}else{
				document.getElementById("cart").style.display='block';
				 
  element.classList.add("active");
			}
			
			
		
			
			
		}
	
	</script>
	
	<script>
	
	
		// this script is used to get page current location
		var path = window.location.href;
		
		//this code used to split location by / and get pop output as page name
var page = path.split("/").pop();
	//alert(page);
		
		//this code use to identify page variable and change clases in side bar elements
		if(page =="whoWeAre.php"){
			 var element = document.getElementById("navItem1");
  element.classList.add("active");
		} else if(page =="index.php") {
			 var element = document.getElementById("navItem");
  element.classList.add("active");
		}
		else if(page =="ourService.php") {
			 var element = document.getElementById("navItem2");
  element.classList.add("active");
		}
		else if(page =="petShop.php") {
			 var element = document.getElementById("navItem3");
  element.classList.add("active");
		}
	
	</script>
	<script>
window.onscroll = function() {myFunction()};

var navbar = document.getElementById("second");
		var navitem = document.getElementById("navItem");
		var navitem1 = document.getElementById("navItem1");
		var navitem2 = document.getElementById("navItem2");
		var navitem3 = document.getElementById("navItem3");
		var navitem4 = document.getElementById("openCart");
		
var sticky = navbar.offsetTop;

function myFunction() {
	
	
  if (window.pageYOffset >= 50) {
    navbar.classList.add("sticky");
	  navitem.classList.add("stickyNavItem")
	  navitem1.classList.add("stickyNavItem")
	  navitem2.classList.add("stickyNavItem")
	  navitem3.classList.add("stickyNavItem")
	   navitem4.classList.add("stickyNavItem")
  } else {
    navbar.classList.remove("sticky");
	  navitem.classList.remove("stickyNavItem");
	  navitem1.classList.remove("stickyNavItem");
	  navitem2.classList.remove("stickyNavItem");
	  navitem3.classList.remove("stickyNavItem");
	  navitem4.classList.remove("stickyNavItem");
	  
  }
}
</script>
	
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
	
</body>
</html>