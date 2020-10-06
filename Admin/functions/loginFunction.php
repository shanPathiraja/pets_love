
<?php 
include('../includes/conn.php');

session_start();


$email = $_POST["email"];
$password= $_POST["password"];


$qur ="SELECT id, email,name FROM `users` WHERE email='$email' AND password='$password'";

$user = mysqli_query($dbcon,$qur);

$user_name = "";

while($usr = mysqli_fetch_row($user)){
	
	$user_name = $usr[2];
	
}

if($user_name!=""){
	
	$_SESSION["user_name"]= $user_name;
	$_SESSION["email"] = $email;
	
	
	echo("Login Success. Hello ".$user_name);
}else{
	echo("Login Failed invalied password or email..!");
}




?>