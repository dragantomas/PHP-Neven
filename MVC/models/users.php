<?php 

require_once 'controllers/general.php';

class usersModel extends General{

	function getAllUsers(){

		$sql = "SELECT * FROM users";
		$query = $this->db->query($sql);
		$users = $query->fetchAll(PDO::FETCH_ASSOC);

		return $users;

	}

	function getUser($user_id){
		$sql = "SELECT * FROM users WHERE id=$user_id";
		$query = $this->db->query($sql);
		$users = $query->fetchAll(PDO::FETCH_ASSOC);

		return $users;
	}

	static function getWeather(){
		echo General::getWeather();
	}
	
}

?>