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
		public function getSomeProducts($where, $order, $count, $offset){
			
		}
		public function getCount(){
			return $this->db->query("SELECT COUNT(*) as count FROM products")->fetch_assoc()['count'];
		}
		public function getRate($product_id){
			
		}
	}
?>