<?php 

	class loginmodel extends DModel{

		public function __construct(){
			parent::__construct();
		}
		public function login($users,$email,$password){
			$sql = "SELECT * FROM $users WHERE email=? AND password=? ";
			return $this->db->affectedRows($sql,$email,$password);
		}	
		public function getLogin($users,$email,$password){
			$sql = "SELECT * FROM $users WHERE email=? AND password=? ";
			return $this->db->selectUser($sql,$email,$password);
		}

		
	}



?>

