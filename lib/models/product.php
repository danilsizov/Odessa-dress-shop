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
		public static function getSomeProducts($where, $order, $count, $offset){
			
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
		public function setId(){
			
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