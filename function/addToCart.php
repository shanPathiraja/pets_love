<?php 

include('../includes/conn.php');

session_start();

if(!isset($_SESSION['cart'])){
    $_SESSION['cart']=array();
}else{
	
}

if(isset($_POST["id"])){
	var_dump($_POST);
$id =$_POST["id"];
	$amount =$_POST["amount"];
	$price = $_POST["price"];
	$name = $_POST["name"];
	
	$totalprice = bcadd($price,'0',2)* bcadd($amount,'0',2);
	
	//echo($totalprice);
	
	$cartItem = array(
		'id'=>$id,
		'title'=>$name,
		'price'=>$totalprice,
		'quntity'=>$amount
	);
		
		$_SESSION['cart'][$id]= $cartItem;
		
	var_dump($_SESSION['cart']);
	
}




?>