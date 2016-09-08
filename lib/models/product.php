<?php
	require_once 'database.php';

	class Product
	{
		private $db;
		public function __construct(argument)
		{
			$db = Database::getInstance();
		}
		public function getById($id){
			#$db_result = $this->db->query("SELECT * FROM products WHERE id = '{$id}'");
			#return $db_result->fetch_assoc();
		}
	}
?>