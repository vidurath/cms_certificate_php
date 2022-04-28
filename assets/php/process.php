<?php


require_once 'auth.php';
require_once 'session.php';

$cuser = new Auth();


//handle request sent
if(isset($_POST['uuid_req'])){
	$uuid = $_POST['uuid_req'];

	// $cuser->add_request($cid,$uname,$uuid);

  if($cuser->request_exist($uuid)){
    echo "Update!!!!!!!!";
    $cuser->print_request($uuid);
  }
  else {
    echo "Add!!!!!!";
    echo $cid;
    echo $cname;
    $cuser->add_request($cid,$cname,$uuid);
    $cuser->print_request($uuid);
  }
}

//hpdetails
if(isset($_POST['declined'])){
  $uuid = $_POST['declined'];
  $cuser->declined_certificate($uuid);
}
//hpdetails
if(isset($_POST['valid'])){
  $uuid = $_POST['valid'];
  $cuser->valid_certificate($uuid);
}
//certificate add/edit
if(isset($_POST['print_approve'])){
  $uuid = $_POST['print_approve'];
  $cuser->print_approve($uuid);
}

if(isset($_POST['print_btn'])){
  $uuid = $_POST['print_btn'];
  $cuser->print_btn($uuid);
  $cuser->print_req_remove($uuid);
}


 ?>
