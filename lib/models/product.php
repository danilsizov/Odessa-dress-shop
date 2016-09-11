<?php
	require_once 'database.php';

	class Product
	{
		#private $db;
		
		private $id;
		private $name;
		private $description;
		private $old_price;
		private $new_price;
		private $samples;
		private $rate;

		public function __construct()
		{
			#$this->db = Database::getInstance();
		}
		public static function getById($id){
			#$db_result = $this->db->query("SELECT * FROM products WHERE id = '{$id}'");
			#return $db_result->fetch_assoc();
		}	
		public static function search($query){
			
			return getSomeProducts("`name` REGEXP '^{$query}'");
			
		}
		public static function getSomeProducts($where=false, $order=false, $count=false, $offset=false){
			$db = Database::getInstance();
			$sql = "SELECT * FROM products";
			if ($where) $sql .= "WHERE $where";
			if ($order) $sql .= "ORDER BY $order";
			if ($count) {
				$sql .= "LIMIT $count";
				if ($offset) {
					$sql .= "OFFSET $offset";
				}
			}
			$db_result = $db->query($sql);
			$ar = array();
			while ($row = $db_result->fetch_assoc()) {
				$rate_responce = $db->query("SELECT avg(rate) AS rate FROM rates WHERE product_id = {$row['id']}");
				if($rate_responce){
					$row['rate'] = $rate_responce->fetch_assoc()['rate'];
				}else $row['rate'] = 3;
				array_push($ar, $row);
			}
			return $ar;
		}
		private static function parseProduct($row){
			$user = new User();
			$user->id = $row['id'];
			$user->name = $row['name'];
			$user->description = $row['description'];
			$user->old_price = $row['old_price'];
			$user->new_price = $row['new_price'];
			return $user;
		}
		public static function getCount(){
			$db = Database::getInstance();
			return $db->query("SELECT COUNT(*) as count FROM products")->fetch_assoc()['count'];
		}
		public function getId(){
			return $this->id;
		}
		public function getName(){
			return $this->name;
		}
		public function getDescription(){
			return $this->description;
		}
		public function getOldPrice(){
			return $this->old_price;
		}
		public function getNewPrice(){
			return $this->new_price;
		}
		public function getSamples(){
			return $this->samples;
		}
		public function getRate(){
			return $this->rate;
		}
		public function setName(){
			
		}
		public function setDescription(){
			
		}
		public function setOldPrice(){
			
		}
		public function setNewPrice(){
			
		}
		public function setSamples(){
			
		}
		public function setRate(){
			
		}
		public function toArray(){
			$ar = array('id' => $this->getId(),
						'name' => $this->getName(),
						'description' => $this->getDescription(),
						'old_price' => $this->getOldPrice(),
						'new_price' => $this->getNewPrice(),
						'sample' => $this->getSample(),
						'rate' => $this->getRate());
		}
	}
?>