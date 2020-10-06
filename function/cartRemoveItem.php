<?php 
session_start();
if(isset($_POST['id'])){
	
	$id = $_POST['id'];
	
	unset($_SESSION['cart'][$id]);
	
	echo('item succesfully removed..!');
	
}else{
	echo('Failed to remove item..!');
}


?>