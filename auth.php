<?php 
	require_once "./lib/models/user.php";	
	echo "asd".DB_PASS;
	print_r($_POST);
	$user = new User();
	echo $user->auth($_POST['email'], $_POST['password']);
?>