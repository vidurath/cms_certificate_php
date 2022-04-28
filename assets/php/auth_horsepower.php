<?php

require_once 'config.php';

class Auth_horsePower extends Database{

    public function add_horsePowerDetail($uuid,$ctype,$snum,$regmark,$rbn,$ownername,$ownerinumber,$owneraddress,$vmake,$vmodel,$vclass,$vtype,$vcolour,$vchassis,$vengnumber,$vengcapacity,$installedby,$invnumber,$invamount,$qrcode,$mspeed) {
        $sql = "INSERT INTO horsepower_detail(uuid,ctype,serialnumber,rmark,rbn,cname,cidentification,caddress,vmake,vmodel,vclass,vtype,vcolour,chassisnumber,enginenumber,enginecapacity,installedby,invnumber,amountnumber,qrcode,mspeed)
        VALUES (:uuid,:ctype,:snum,:regmark,:rbn,:ownername,:ownerinumber,:owneraddress,:vmake,:vmodel,:vclass,:vtype,:vcolour,:vchassis,:vengnumber,:vengcapacity,:installedby,:invnumber,:invamount,:qrcode,:mspeed)";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([
            'uuid' => $uuid,
            'ctype' => $ctype,
            'snum' => $snum,
            'regmark' => $regmark,
            'rbn' => $rbn,
            'ownername' => $ownername,
            'ownerinumber' => $ownerinumber,
            'owneraddress' => $owneraddress,
            'vmake' => $vmake,
            'vmodel' => $vmodel,
            'vclass' => $vclass,
            'vtype' => $vtype,
            'vcolour' => $vcolour,
            'vchassis' => $vchassis,
            'vengnumber' => $vengnumber,
            'vengcapacity' => $vengcapacity,
            'installedby' => $installedby,
            'invnumber' => $invnumber,
            'invamount' => $invamount,
            'qrcode' => $qrcode,
            'mspeed' => $mspeed
        ]);
        return true;
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

    public function get_horsePowerDetail($uuid){

		$sql = "SELECT DISTINCT * FROM horsepower_detail Where uuid = :uuid ";
		$stmt = $this->conn->prepare($sql);
		$stmt->execute(['uuid'=>$uuid]);
		$stmt->execute();
		$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
		return $result;
	}

	public function detele_case($id){
		$sql = "DELETE FROM Offence_Details WHERE OffenceDetailsId = :id";
		$stmt = $this->conn->prepare($sql);
		$stmt->execute(['id'=>$id]);
		return true;
	}

}

 ?>
