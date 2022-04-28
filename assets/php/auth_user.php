<?php

require_once 'config.php';

class Auth_user extends Database{

	// fetch all
	public function get_user(){
		$sql = "SELECT * FROM usertest";
		$stmt = $this->conn->prepare($sql);
		// $stmt->execute(['userid'=>$cid]);
		$stmt->execute();
		$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

		return $result;
	}

	public function Delete($id){
		$sql = "DELETE FROM usertest WHERE id = :id";
		$stmt = $this->conn->prepare($sql);
		$stmt->execute(['id'=>$id]);
		return true;
	}

	public function add_newuser($fullname,$email,$password,$usertype){
		$sql = "INSERT INTO usertest(name,email,password,usertype)
		VALUES (:fullname,:email,:pass)";
		$stmt = $this->conn->prepare($sql);
		$stmt->execute([
			'fullname'=>$fullname,
			'email'=>$email,
			'pass'=>$password,
			'usertype'=>$usertype
			]);
		return true;
	}

}

 ?>
