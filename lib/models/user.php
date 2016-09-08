<?php
	require_once 'database.php';
	@session_start();
	/**
	* 
	*/
	class User
	{
		private $db;
		private $id;
		private $confirmed;
		public function __construct()
		{
			$db = Database::getInstance();
			$id = (isset($_SESSION['user_id'])) ? $_SESSION['user_id'] : null;
			$confirmed = null;
		}
		public function create($email, $password){
			if (validatesEmail($email) && validatesPassword($password)){
				$password_digest = generatePasswordDigest($password);
				$token = $this->generateConfirmationToken();
				return $this->add($email, $password_digest, $token);
			} return false;
		}
		public function auth($email, $password){
			if (validatesEmail($email) && validatesPassword($password)){
				$db_result = $this->db->query("SELECT * FROM user WHERE email = '$email'");
				$row = $db_result->fetch_assoc();
				if($row['password'] == generatePasswordDigest($password)){
					$_SESSION['user_id'] = $row['id'];
					$this->id = $row['id'];
					return true;
				}
			}
		}
		public function is_authed(){
			return $id !== null;
		}
		public function is_confirmed(){ // user is confirmed if confirmation_token is null
			if($confirmed === null){
				$db_result = $this->db->query("SELECT * FROM user WHERE email = '$email'");
				$row = $db_result->fetch_assoc();
				$this->confirmed = ($row['confirmation_token'] == null);
			}
			return $this->confirmed;
		}
		public function confirmUser($token){
			if($this->is_authed()){
				$db_result = $this->db->query("SELECT * FROM user WHERE email = '$email'");
				$row = $db_result->fetch_assoc();
				if($row['confirmation_token'] != null){
					return $this->clearConfirmation($id);
				}else return 'user_already_confirmed'
			}else return "user_not_authed";
		}
		private function validatesEmail($email){
			$regexp = /^(?!(?:(?:\x22?\x5C[\x00-\x7E]\x22?)|(?:\x22?[^\x5C\x22]\x22?)){255,})(?!(?:(?:\x22?\x5C[\x00-\x7E]\x22?)|(?:\x22?[^\x5C\x22]\x22?)){65,}@)(?:(?:[\x21\x23-\x27\x2A\x2B\x2D\x2F-\x39\x3D\x3F\x5E-\x7E]+)|(?:\x22(?:[\x01-\x08\x0B\x0C\x0E-\x1F\x21\x23-\x5B\x5D-\x7F]|(?:\x5C[\x00-\x7F]))*\x22))(?:\.(?:(?:[\x21\x23-\x27\x2A\x2B\x2D\x2F-\x39\x3D\x3F\x5E-\x7E]+)|(?:\x22(?:[\x01-\x08\x0B\x0C\x0E-\x1F\x21\x23-\x5B\x5D-\x7F]|(?:\x5C[\x00-\x7F]))*\x22)))*@(?:(?:(?!.*[^.]{64,})(?:(?:(?:xn--)?[a-z0-9]+(?:-[a-z0-9]+)*\.){1,126}){1,}(?:(?:[a-z][a-z0-9]*)|(?:(?:xn--)[a-z0-9]+))(?:-[a-z0-9]+)*)|(?:\[(?:(?:IPv6:(?:(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){7})|(?:(?!(?:.*[a-f0-9][:\]]){7,})(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,5})?::(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,5})?)))|(?:(?:IPv6:(?:(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){5}:)|(?:(?!(?:.*[a-f0-9]:){5,})(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,3})?::(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,3}:)?)))?(?:(?:25[0-5])|(?:2[0-4][0-9])|(?:1[0-9]{2})|(?:[1-9]?[0-9]))(?:\.(?:(?:25[0-5])|(?:2[0-4][0-9])|(?:1[0-9]{2})|(?:[1-9]?[0-9]))){3}))\]))$/iD ;
			if (preg_match($regexp, $email) == 1) return true;
				else return false;
		}
		private function validatesPassword($pass){
			if((strlen($pass) > MIN_PASS_LEN) && (strlen($pass) < MAX_PASS_LEN)){
				return true;
			}
			return false;
		}
		private function generateConfirmationToken(){
			return md5(time());
		}
		private function add($email, $pass, $token){
			return $this->db->query("INSERT INTO users (email, password, confirmation_token) VALUES ('$email', '$pass', '$token')");
		}
		private function generatePasswordDigest($password){
			return md5(SECRET_WORD . $password);
		}
		private function clearConfirmation($id){
			return $this->db->query("UPDATE users SET confirmation_token = NULL WHERE id = '$id'")->fetch_assoc();
		}
	}
?>