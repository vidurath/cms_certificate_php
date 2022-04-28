<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: *");
require_once '../include/db.php';
require_once(__DIR__ . '../../vendor/autoload.php');

$uuid = \Ramsey\Uuid\Uuid::uuid4();
$url = 'http://localhost/ccs/validation.php?uuid='.$uuid;
$qrurl = "https://chart.googleapis.com/chart?cht=qr&chs=250x250&chl={$url}";
$qrcode['img'] = $qrurl;

$postdata = file_get_contents("php://input");

if (isset($postdata) && !empty($postdata))
{
    $request = json_decode($postdata);

    $Ownername = $request->Ownername;
    $Address = $request->Address;
    $Identification = $request->Identification;
    $RegistrationMark = $request->RegistrationMark;
    $RBN = $request->RBN;
    $Make = $request->Make;
    $Model = $request->Model;
    $Class = $request->Class;
    $Type = $request->Type;
    $Colour = $request->Colour;
    $Chassis_Number = $request->Chassis_Number;
    $Engine_Number = $request->Engine_Number;
    $Engine_Capacity = $request->Engine_Capacity;

    $sql =  "INSERT INTO horsepower_detail (uuid,cname,caddress,cidentification,rmark,rbn,vmake,vmodel,vclass,vtype,vcolour,chassisnumber,enginenumber,enginecapacity,qrcode)
    VALUES ('$uuid','$Ownername','$Address','$Identification','$RegistrationMark','$RBN','$Make','$Model','$Class','$Type','$Colour','$Chassis_Number','$Engine_Number','$Engine_Capacity','$qrurl')";
    

    if($conn->query($sql)===TRUE) {
        http_response_code(201);
    }else{
        http_response_code(422);
    }
    
}

?>