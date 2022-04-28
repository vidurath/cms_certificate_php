<?php

require_once 'config.php';

class Auth_certificate extends Database{

	// fetch all certificate
	public function get_allhorsepower(){
		// $sql = "SELECT * FROM certificate WHERE userid = :userid";
		$sql = "SELECT * FROM horsepower_detail";
		$stmt = $this->conn->prepare($sql);
		// $stmt->execute(['userid'=>$cid]);
		$stmt->execute();
		$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

		return $result;
	}

	// fetch all certificate details
	public function get_horsePowerDetail($uuid){

		$sql = "SELECT * FROM horsepower_detail Where uuid= :uuid";
		// $stmt = $this->conn->prepare($sql);
		$stmt->execute(['uuid'=>$uuid]);
		$stmt->execute();
		$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
		return $result;
	}

	public function detele_horsePowerDetail($id){
		$sql = "DELETE FROM horsepower_detail WHERE id = :id";
		$stmt = $this->conn->prepare($sql);
		$stmt->execute(['id'=>$id]);
		return true;
	}

}

 ?>
