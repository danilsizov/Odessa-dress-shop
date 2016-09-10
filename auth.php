<?php 
	require_once "./lib/models/user.php";	
	if(isset($_POST['email']) && isset($_POST['password'])){
		$user = new User();
		if($user->auth($_POST['email'], $_POST['password'])){
			header('location: ./');
		}else header('location: ./sign-in.php');
	}else header('location: ./sign-in.php');
?>