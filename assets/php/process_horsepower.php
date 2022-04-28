<?php


require_once 'auth_horsepower.php';
require_once 'session.php';

$cuser = new Auth_horsePower();

if (isset($_POST['action']) && $_POST['action'] == 'add_HorsePowerDetail') {
    // print_r($_POST);
    $uuid = $cuser->test_input($_POST['uuid']);
    $ctype = $cuser->test_input($_POST['ctype']);
    $snum = $cuser->test_input($_POST['snum']);
    $regmark = $cuser->test_input($_POST['regmark']);
    $rbn = $cuser->test_input($_POST['rbn']);
    $ownername = $cuser->test_input($_POST['ownername']);
    $ownerinumber = $cuser->test_input($_POST['ownerinumber']);
    $owneraddress = $cuser->test_input($_POST['owneraddress']);
    $vmake = $cuser->test_input($_POST['vmake']);
    $vmodel = $cuser->test_input($_POST['vmodel']);
    $vclass = $cuser->test_input($_POST['vclass']);
    $vtype = $cuser->test_input($_POST['vtype']);
    $vcolour = $cuser->test_input($_POST['vcolour']);
    $vchassis = $cuser->test_input($_POST['vchassis']);
    $vengnumber = $cuser->test_input($_POST['vengnumber']);
    $vengcapacity = $cuser->test_input($_POST['vengcapacity']);
    $installedby = $cuser->test_input($_POST['installedby']);
    $invnumber = $cuser->test_input($_POST['invnumber']);
    $invamount = $cuser->test_input($_POST['invamount']);
    $mspeed = $cuser->test_input($_POST['mspeed']);
    $url = "https://chart.googleapis.com/chart?cht=qr&chs=250x250&chl={$uuid}";
    $qrcode['img'] = $url;
    
    $cuser->add_HorsePowerDetail($uuid,$ctype,$snum,$regmark,$rbn,$ownername,$ownerinumber,$owneraddress,$vmake,$vmodel,$vclass,$vtype,$vcolour,$vchassis,$vengnumber,$vengcapacity,$installedby,$invnumber,$invamount,$qrcode['img'],$mspeed);

}

//Display all
if (isset($_POST['action']) && $_POST['action'] == 'display_horsePowerDetail') {
	$token = $cuser->test_input($_POST['token']);
    // $token = 'd4d72aa1-73c0-4593-b346-bcf3a01a24a4';
	$output = '';

	$accused = $cuser->get_horsePowerDetail($token);

	if ($accused) {
		foreach ($accused as $row){
		$output .= '

								<div class="row">
                  <div class="col-6">
                      <p><b>Type Of Certificate :</b> '.$row['ctype'].'</p>
                      <p><b>Serial Number :</b> '.$row['serialnumber'].'</p>
                      <input type="hidden" id="serialnumber" value="'.$row['serialnumber'].'">
											<p><b>Registration Mark :</b> '.$row['rmark'].'</p>
											<p><b>RBN :</b> '.$row['rbn'].'</p>
                      <p><b>Name :</b> '.$row['cname'].'</p>
											<p><b>Address :</b> '.$row['caddress'].'</p>
                      <p><b>Identification :</b> '.$row['cidentification'].'</p>
                      <p><b>Installed by :</b> '.$row['installedby'].'</p>
                      <p><b>Max. Speed :</b> '.$row['mspeed'].'</p>
                      <p><b>Installation Date :</b> '.$row['createdAt'].'</p>
                  </div>
                  <div class="col-6">
											<p><b>Make :</b> '.$row['vmake'].'</p>
											<p><b>Model :</b> '.$row['vmodel'].'</p>
                      <p><b>Class :</b> '.$row['vclass'].'</p>
                      <p><b>Type :</b> '.$row['vtype'].'</p>
                      <p><b>Colour :</b> '.$row['vcolour'].'</p>
                      <p><b>Chassis Number :</b> '.$row['chassisnumber'].'</p>
                      <p><b>Engine Number :</b> '.$row['enginenumber'].'</p>
                      <p><b>Engine Capacity :</b> '.$row['enginecapacity'].'</p>
                      <p><b>Invoice Number code :</b> '.$row['invnumber'].'</p>
                      <p><b>Invoice Amount :</b> '.$row['amountnumber'].'</p>
                  </div>
                  <div class="row" id="qrcode" style="display:none;">
                  <p><button type="button" id="btnqrcodehide" class="btn btn-block btn-outline-dark">hide QRCODE</button></p>
                  <p><img src="'.$row['qrcode'].'" alt="QR Code" width="300px" height="300px"></p>
                  </div>
                </div>

                <div class="row">
                  <p><button type="button" id="btnqrcode" class="btn btn-block btn-outline-dark">Show QRCODE</button></p>
                </div>

                



			<a href="#" id="'.$row['id'].'" title="Edit" class="text-primary editBtn"><i class="fas fa-edit fa-lg" data-toggle="modal" data-target="#edithorsepowerModal"></i></a>&nbsp;


			<a href="#" id="'.$row['id'].'" title="Delete" class="text-danger deleteOffenceDetailBtn"><i class="fas fa-trash-alt fa-lg"></i></a>


		';



        echo $output;
		}
	}
	else{
		 //echo '<h3 class="text-center text-secondary">No data</h3>';
		 echo 'nodata';
	}

}





 ?>
