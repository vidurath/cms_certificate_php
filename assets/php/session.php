<?php

session_start();
require_once 'auth.php';

$cuser = new Auth();

if(!isset($_SESSION['user'])){
    header('location:login.php');
    die;
}

$cemail = $_SESSION['user'];

$data = $cuser->currentUser($cemail);

$cid = $data['id'];
$cname = $data['name'];
$cpassword = $data['password'];
$usertype = $data['usertype'];
$created = $data['created_at'];
$verified = $data['verified'];
$lastlogin = $data['lastlogin'];


?>
