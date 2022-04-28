<?php

require_once 'config.php';

class Auth_splimiter extends Database{

  public function getall(){
		$sql = "SELECT * FROM speedlimiter";
		$stmt = $this->conn->prepare($sql);
		// $stmt->execute(['userid'=>$cid]);
		$stmt->execute();
		$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

		return $result;
  }

  public function AddNew($snumber,$make,$billreference,$voltage) {
      $sql = "INSERT INTO speedlimiter(serialnumber,make,billreference,voltage)
      VALUES (:snumber,:make,:billreference,:voltage)";
      $stmt = $this->conn->prepare($sql);
      $stmt->execute([
          'snumber' => $snumber,
          'make' => $make,
          'billreference' => $billreference,
          'voltage' => $voltage
      ]);
      return true;
  }

  	//Edit Accused
	public function edit_sp($id){
		$sql = "SELECT * FROM speedlimiter WHERE id = :id";
		$stmt = $this->conn->prepare($sql);
		$stmt->execute(['id'=>$id]);
		$result = $stmt->fetch(PDO::FETCH_ASSOC);
		return $result;
	}

  public function Update($id,$snumber,$make,$billreference,$voltage){
		$sql = "UPDATE speedlimiter SET serialnumber = :snumber, make = :make, billreference=:billreference,voltage = :voltage
		WHERE id = :id";
		$stmt = $this->conn->prepare($sql);
		$stmt->execute([
			'snumber'=>$snumber,
			'make'=>$make,
			'billreference'=>$billreference,
			'voltage'=>$voltage,
			'id'=>$id]);
		return true;
	}

  public function Delete($id){
		$sql = "DELETE FROM speedlimiter WHERE id = :id";
		$stmt = $this->conn->prepare($sql);
		$stmt->execute(['id'=>$id]);
		return true;
	}

}


?>
