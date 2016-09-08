<?php
require_once "config.php";
class Database {
	private $mysqli;
	private static $_instance = null;
	private function __construct() {
		$this->mysqli = new mysqli("localhost", DB_USER, DB_PASS, DB_NAME);
		if ($this->mysqli->connect_errno)
    		exit("Не удалось подключиться к MySQL: (" . $this->mysqli->connect_errno . ") " . $this->mysqli->connect_error);
    	$this->mysqli->query("SET NAMES utf8");
	}
	protected function __clone() {}
	static public function getInstance() {
		if(is_null(self::$_instance))
		{
			self::$_instance = new self();
		}
		return self::$_instance;
	}
	public function query($sql){
		if($sql){
			return $this->mysqli->query($sql);
		}else
			return null;
	}
}
?>