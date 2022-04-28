<?php

require_once 'config.php';

class Auth_Upload extends Database{

	public function get_uploadimg($uuid){

		$sql = "SELECT DISTINCT id,uuid,photo,title FROM horsepower_image Where uuid = :uuid ";
		$stmt = $this->conn->prepare($sql);
		$stmt->execute(['uuid'=>$uuid]);
		$stmt->execute();
		$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
		return $result;
	}

	public function add_upload($uuid,$photo,$title){
		$sql = "INSERT INTO horsepower_image(uuid,photo,title)
		VALUES (:uuid,:photo,:title)";
		$stmt = $this->conn->prepare($sql);
		$stmt->execute([
			'uuid'=>$uuid,
			'photo'=>$photo,
			'title'=>$title
			]);
		return true;
	}

	public function delete_upload($id){
	$sql = "DELETE FROM horsepower_image WHERE id = :id";
	$stmt = $this->conn->prepare($sql);
	$stmt->execute(['id'=>$id]);
	return true;
	}

}

 ?>
