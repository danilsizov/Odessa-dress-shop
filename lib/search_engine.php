<?php
	require_once "database.php";
	require_once "utils.php";
	function search($query){
		$sql = "SELECT * FROM `products` WHERE `name` REGEXP '^{$query}'";
		//$sql = "SELECT * FROM `products`";
		$db = Database::getInstance();
		print_var($sql);
		print_var($db);
		$mysql_result = $db->query($sql);
		print_var($db);
		if (!$mysql_result) return false;
		$array = array();
		while ($row = $mysql_result->fetch_assoc()) {
			array_push($array, $row);
		}
		return $array;
	}

?>