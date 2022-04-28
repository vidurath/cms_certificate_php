<?php

require_once 'config.php';

class Auth extends Database{
	//Register New User
	public function register($fullname,$email,$password){
		$sql = "INSERT INTO usertest(name,email,password)
		VALUES (:fullname,:email,:pass)";
		$stmt = $this->conn->prepare($sql);
		$stmt->execute([
			'fullname'=>$fullname,
			'email'=>$email,
			'pass'=>$password
			]);
		return true;
	}

	//Check if user already registered
	public function user_exist($email){
		$sql = "SELECT email FROM usertest WHERE email = :email";
		$stmt = $this->conn->prepare($sql);
		$stmt->execute(['email'=>$email]);

		$result = $stmt->fetch(PDO::FETCH_ASSOC);

		return $result;
	}

	public function login($email){
		$sql = "SELECT id,email,password FROM usertest WHERE email = :email AND deleted != 0";
		$stmt = $this->conn->prepare($sql);
		$stmt->execute(['email'=>$email]);
		$row = $stmt->fetch(PDO::FETCH_ASSOC);

		return $row;
	}

	//Current User In Session
	public function currentUser($email){
		$sql = "SELECT * FROM usertest WHERE email = :email AND deleted != 0";
		$stmt = $this->conn->prepare($sql);
		$stmt->execute(['email'=>$email]);
		$row = $stmt->fetch(PDO::FETCH_ASSOC);

		return $row;
	}

	//forgot password
	public function forgot_password($token,$email){
		$sql = "UPDATE usertest SET token = :token, token_expire = DATE_ADD(NOW(),
		INTERVAL 10 MINUTE) WHERE email = :email";
		$stmt = $this->conn->prepare($sql);
		$stmt->execute(['token'=>$token,'email'=>$email]);

		return true;
	}

	public function last_login($current_date,$email){
		$sql = "UPDATE usertest SET lastlogin = :currentdate WHERE email = :email";
		$stmt = $this->conn->prepare($sql);
		$stmt->execute(['email'=>$email,'currentdate'=>$current_date]);

		return true;
	}

	//roles
	public function dept_roles($email,$dept){
		$sql = "SELECT email,dept FROM usertest WHERE email = :email AND deleted != 0";
		$stmt = $this->conn->prepare($sql);
		$stmt->execute(['email'=>$email,'dept'=>$dept]);
		$row = $stmt->fetch(PDO::FETCH_ASSOC);

		return $row;
	}

	
    public function add_request($cid,$uname,$uuid) {
        $sql = "INSERT INTO request_detail(userid,uname,uuid) VALUES (:cid,:uname,:uuid)";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([
          'cid' => $cid,
          'uname' => $uname,
          'uuid' => $uuid
        ]);
    }

	public function request_exist($uuid){
		$sql = "SELECT uuid FROM request_detail WHERE uuid = :uuid";
		$stmt = $this->conn->prepare($sql);
		$stmt->execute(['uuid'=>$uuid]);
		$result = $stmt->fetch(PDO::FETCH_ASSOC);
		return $result;
	}

	public function declined_certificate($uuid){
		$sql = "UPDATE horsepower_detail SET valid = '1' WHERE uuid = :uuid";
		$stmt = $this->conn->prepare($sql);
		$stmt->execute(['uuid'=>$uuid]);
		return true;
	}

	public function print_request($uuid){
		$sql = "UPDATE horsepower_detail SET request = '1' WHERE uuid = :uuid";
		$stmt = $this->conn->prepare($sql);
		$stmt->execute(['uuid'=>$uuid]);
		return true;
	}

	public function print_approve($uuid){
		$sql = "UPDATE request_detail SET reqstatus = '1' WHERE uuid = :uuid";
		$stmt = $this->conn->prepare($sql);
		$stmt->execute(['uuid'=>$uuid]);
		return true;
}

	public function print_req_remove($uuid){
		$sql = "UPDATE horsepower_detail SET request = '0' WHERE uuid = :uuid";
		$stmt = $this->conn->prepare($sql);
		$stmt->execute(['uuid'=>$uuid]);
		return true;
	}

	public function print_btn($uuid){
		$sql = "UPDATE request_detail SET reqstatus = '0' WHERE uuid = :uuid";
		$stmt = $this->conn->prepare($sql);
		$stmt->execute(['uuid'=>$uuid]);
		return true;
	 }

	 public function totalCount($tablename){
		 $sql = "SELECT * FROM $tablename";
		 $stmt = $this->conn->prepare($sql);
		 $stmt->execute();
		 $count = $stmt->rowCount();

		 return $count;
	 }

	 public function totalReq(){
		$sql = "SELECT * FROM request_detail WHERE reqstatus = '1'";
		$stmt = $this->conn->prepare($sql);
		$stmt->execute();
		$count = $stmt->rowCount();

		return $count;
	}

	public function get_ReqTime(){
		$sql = "SELECT TIME(createdAt) AS month FROM request_detail WHERE reqstatus = '1' ORDER BY id DESC LIMIT 1";
		$stmt = $this->conn->prepare($sql);
		$stmt->execute();
		$result = $stmt->fetch(PDO::FETCH_ASSOC);
		return $result;
	}

}

 ?>
