<?php 

include ('db.php');

class users extends db {

	public function getUsers($keyword){
		if($keyword){
			$sql = 'SELECT * FROM users WHERE usename LIKE "%'.$keyword.'%"';
		} else {
			$sql = 'SELECT * FROM users';
		}
			$users = $this->select($sql);
			return $users;
		}

public function select($sql){
		$sql = 'SELECT * FROM users';
		$users = $this->query($sql);

		return $users;
	}

public function deleteUser($id){
	$sql = 'DELETE FROM users WHERE id = '.$id;
	$this->query($sql);
}

public function insertUser($data){
	$sql = 'INSERT INTO users('usename','password')'.
	'VALUE ("'.$data['usename'].'","'.$data['password'].'")';
	$this->query($sql);
}

public function findUser($id){
	$sql = 'SELECT * FROM users WHERE id = '.$id;
	$user = $this->select($sql);

	return $user[0];
}

public function updateUser($data){
	$sql = 'UPDATE "users"'.
	'SET "usename" = "'.$data['usename'].'", '.
		'"password" = "'.$data['password'].'" '.
		'WHERE id='.$data['id'];
		$this->query($sql);
}

}



?>