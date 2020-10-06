<?php
include('../includes/conn.php');

if(isset($_POST)){
	
	if(isset($_FILES["image"]))
	{
		$title = $_POST["itemName"];
		$price = $_POST["itemPrice"];
		$quntity =$_POST["itemquntity"];
		
		$t = time();
      $errors= array();
      $file_name = $_FILES['image']['name'];
		$file_size =$_FILES['image']['size'];
      $file_tmp =$_FILES['image']['tmp_name'];
      $file_type=$_FILES['image']['type'];
		
	$path_info = pathinfo($_FILES['image']['name']);
		echo($path_info['extension']);
		$file_ext =$path_info['extension'];
		$file_name = $t.".".$file_ext;
		move_uploaded_file($file_tmp,"../../shopImage/".$file_name);
		
		
		$qur = "INSERT INTO `shop` ( `item_name`, `itemImage`, `item_price`, `quntity`) VALUES ('$title', '$file_name', '$price', '$quntity')";
		
		mysqli_query($dbcon,$qur);
		
		echo("Item successfully added");
	}}






?>