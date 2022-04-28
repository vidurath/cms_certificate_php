<?php

require_once 'admin-db.php';

$admin = new Admin();

//Handle Admin Login Ajax Request
if (isset($_POST['action']) && $_POST['action'] == 'adminLogin') {
  //print_r($_POST);
  $username = $admin->test_input($_POST['username']);
  $password = $admin->test_input($_POST['password']);

  $password = sha1($password);

  $loggedInAdmin = $admin->admin_login($username,$password);

  if($loggedInAdmin != null){
    
    $_SESSION['username'] = $username;

    echo 'admin_login';
  }else {
    echo $admin->showMessage('danger','Username or Password is Incorrent!');
  }
}

 ?>
