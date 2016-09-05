<?php
	require_once "database.php";
	require_once "utils.php";
	function search($query){
		$db = Database::getInstance();
		$sql = "SELECT * FROM `products` WHERE `name` REGEXP '^{$query}'";
		//$sql = "SELECT * FROM `products`";
		$mysql_result = $db->query($sql);
		if (!$mysql_result) return false;
		$array = array();
		while ($row = $mysql_result->fetch_assoc()) {
			array_push($array, $row);
		}
		return $array;
	}


	// print_var($_GET);
	function searchTempDB($query){
		include 'temp_db.php';
		foreach ($all_products as $key => $value) {
			// print_var($value);
			if(!preg_match("/^$query/", $value["name"])){
				echo "^$query";
				unset($all_products[$key]);
			}
		}
		// print_var($all_products);
		return $all_products;
	}
?>