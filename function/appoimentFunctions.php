<?php
include('../includes/conn.php');
if(isset($_POST)){
	
	$email = $_POST["email"];
	$fname = $_POST["fname"];
	$lname = $_POST["lname"];
	$phone = $_POST["phone"];
	$catogery=$_POST["catogery"];
	$date = $_POST["date"];
	
	
	$cdate = date("Y-m-d");
	
	
	
	$qur ="INSERT INTO `appoiments` (`f_name`, `l_name`, `phone`, `email`, `date`, `create_date`, `animal_type`) VALUES ('$fname', '$lname', '$phone', '$email', '$date', '$cdate', '$catogery');";
	
	
	$res=mysqli_query($dbcon,$qur);
	
	
	var_dump($res);
	
	
	
	
	
	
	
	
	
}

?>