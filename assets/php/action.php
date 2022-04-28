<?php

session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';


$mail = new PHPMailer(true);

require_once 'auth.php';

$user = new Auth();

//handle Register Ajax request
if (isset($_POST['action']) && $_POST['action'] == 'register'){
    //print_r($_POST);
    $fullname = $user->test_input($_POST['fullname']);
    $email = $user->test_input($_POST['email']);
    $password = $user->test_input($_POST['rpassword']);


    $hpass = password_hash($password, PASSWORD_DEFAULT);

    if($user->user_exist($email)){
        //echo 'email exist';
        echo $user->showMessage('warning','This E-Mail is already Exist !!!');
    }
    else{
        if($user->register($fullname,$email,$hpass)){
             echo 'register';

            $_SESSION['user'] = $email;
        }
        else{
            // echo 'error';
            echo $user->showMessage('Danger','Something went wrong! try again later');
        }
    }

}

//handle Login Ajax request
if (isset($_POST['action']) && $_POST['action'] == 'login'){
    $email = $user->test_input($_POST['email']);
    $pass = $user->test_input($_POST['password']);

    $current_date = date("Y-m-d H:i:s");


    $loggedInUser = $user->login($email);

    // $user->last_login($current_date,$email);

    if($loggedInUser != null){
        if(password_verify($pass,$loggedInUser['password'])){
            if(!empty($_POST['remember'])){
                setcookie("email",$email,time()+(30*24*60*60),'/');
                setcookie("password",$pass,time()+(30*24*60*60),'/');
            }else{
                setcookie("email","",1,'/');
                setcookie("password","",1,'/');
            }

            echo 'user';

            $_SESSION['user'] = $email;
            $user->last_login($current_date,$email);

        }
        else{
            echo $user->showMessage('danger','Password is incorrect!');
        }
    }
    else{
        echo $user->showMessage('danger','User not found!');
    }
}



?>
