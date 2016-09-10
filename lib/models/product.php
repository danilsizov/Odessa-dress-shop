<?php
	require_once 'database.php';

	class Product
	{
		private $db;
		public function __construct()
		{
			$this->db = Database::getInstance();
		}
		public static function getById($id){
			#$db_result = $this->db->query("SELECT * FROM products WHERE id = '{$id}'");
			#return $db_result->fetch_assoc();
		}	
		public static function getSomeProducts($where, $order, $count, $offset){
			
		}
		public static function getCount(){
			$db = Database::getInstance();
			return $db->query("SELECT COUNT(*) as count FROM products")->fetch_assoc()['count'];
		}
		public function getRate(){
			
		}

	}
?>