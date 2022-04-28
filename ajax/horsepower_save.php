<?php

include_once("../include/db.php");

$id = $_POST['a'];
$ctype2 = mysqli_real_escape_string($conn, $_POST['ctype2']);
$snum2 = mysqli_real_escape_string($conn, $_POST['snum2']);
$regmark2 = mysqli_real_escape_string($conn, $_POST['regmark2']);
$rbn2 = mysqli_real_escape_string($conn, $_POST['rbn2']);
$ownername2 = mysqli_real_escape_string($conn, $_POST['ownername2']);
$ownerinumber2 = mysqli_real_escape_string($conn, $_POST['ownerinumber2']);
$owneraddress2 = mysqli_real_escape_string($conn, $_POST['owneraddress2']);
$vmake2 = mysqli_real_escape_string($conn, $_POST['vmake2']);
$vmodel2 = mysqli_real_escape_string($conn, $_POST['vmodel2']);
$vclass2 = mysqli_real_escape_string($conn, $_POST['vclass2']);
$vtype2 = mysqli_real_escape_string($conn, $_POST['vtype2']);
$vcolour2 = mysqli_real_escape_string($conn, $_POST['vcolour2']);
$vchassis2 = mysqli_real_escape_string($conn, $_POST['vchassis2']);
$vengnumber2 = mysqli_real_escape_string($conn, $_POST['vengnumber2']);
$vengcapacity2 = mysqli_real_escape_string($conn, $_POST['vengcapacity2']);
$installedby2 = mysqli_real_escape_string($conn, $_POST['installedby2']);
$invnumber2 = mysqli_real_escape_string($conn, $_POST['invnumber2']);
$invamount2 = mysqli_real_escape_string($conn, $_POST['invamount2']);
$mspeed2 = mysqli_real_escape_string($conn, $_POST['mspeed2']);


$sql = "UPDATE horsepower_detail SET ctype='$ctype2',serialnumber='$snum2',rmark='$regmark2',rbn='$rbn2',cname='$ownername2',caddress='$owneraddress2',cidentification='$ownerinumber2',vmake='$vmake2',vmodel='$vmodel2',vclass='$vclass2',vtype='$vtype2',vcolour='$vcolour2',chassisnumber='$vchassis2',enginenumber='$vengnumber2',enginecapacity='$vengcapacity2',installedby='$installedby2',invnumber='$invnumber2', amountnumber='$invamount2', mspeed='$mspeed2' WHERE id='".$id."'";
if($conn->query($sql)===TRUE) {
    echo "update";
}
?>
