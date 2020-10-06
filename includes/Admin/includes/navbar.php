<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link href="../css/navbar.css" rel="stylesheet" type="text/css">
<link href="../css/font.css" rel="stylesheet" type="text/css">
</head>

<body>
	
	<nav>
		<div class="top">
			<div class="top-inner">
			<div class="top-content" ><i><img class="nav-content-icon" src="../images/icons/icons8_envelope_26px.png"></i> <span class="email">shanb@gmail.com </span></div>
			<div class="divider">
			<span>|</span>
				</div>
				
			<div class="top-content" ><i><img class="nav-content-icon" src="../images/icons/icons8_phone_64px.png"></i> <span class="email">+94 716017460 </span></div>
				<div class="divider">
			<span>|</span>
				</div>
				<div class="top-content" style="width: 16rem" ><i><img class="nav-content-icon" src="../images/icons/icons8_clock_30px.png"></i> <span class="email">Contact developer in problem </span></div>
				<div class="top-content" style="width: 15rem; float: right" >
					<i><img class="nav-content-icon" src="../images/icons/icons8_facebook_32px.png"></i> 
				<i><img class="nav-content-icon" src="../images/icons/icons8_google_plus_24px.png"></i>
				<i><img class="nav-content-icon" src="../images/icons/icons8_twitter_circled_50px_1.png"></i>
					<i><img class="nav-content-icon" src="../images/icons/icons8_youtube_100px.png"></i>
				</div>
			</div>
			
		</div>
		<div class="second" id="second">
			<div class="second-inner">
			<div class="logo">
			
			
			</div>
				
				<div class="nav-items">
					<ul>
						<li><a id="navItem" class=""href="../index.php">DashBoard</a></li>
						<li><a id="navItem1" class="" href="../whoWeAre.php">View Appoiments</a></li>
						<li><a id="navItem2" class="" href="../petShop.php">Manage Shop</a></li>
						<li><a onClick="signOutFunc()" id="navItem3" class="" href="#">SignOut</a></li>
				</ul>
			</div>
			</div>
		
			
			
		
		</div>
	
	</nav>
	
	<script>
	
	function signOutFunc(){
	
		
		
                //alert(id);
                var r = confirm("Are you sure you want to delete Place?")
                if(r == true) {
                    $.ajax({
                        url: "./functions/signOut.php", //the page containing php script
                        type: "POST",
                        data: {},
                        beforeSend: function () {
                            $('#right').html('checking');
                        },			//request type
                        success: function (result) {
                            alert(result);
                            location.reload();
                        }
                    });
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
	
		
var sticky = navbar.offsetTop;

function myFunction() {
	
	
  if (window.pageYOffset >= 50) {
    navbar.classList.add("sticky");
	  navitem.classList.add("stickyNavItem")
	  navitem1.classList.add("stickyNavItem")
	  navitem2.classList.add("stickyNavItem")
	  navitem3.classList.add("stickyNavItem")
	 
  } else {
    navbar.classList.remove("sticky");
	  navitem.classList.remove("stickyNavItem");
	  navitem1.classList.remove("stickyNavItem");
	  navitem2.classList.remove("stickyNavItem");
	  navitem3.classList.remove("stickyNavItem");
	 
  }
}
</script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
	
</body>
</html>