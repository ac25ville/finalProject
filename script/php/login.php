<?php

$username = empty($_COOKIE['username'])?'':$_COOKIE['username'];

if($username){
    header("Location: ../../pages/mechanic_pages/mechanic_page.php");
    exit;
}

$action = empty($_POST['action'])?'':$_POST['action'];

if($action=='do_login'){
    handle_login();
}else{
    login_form();
}

function handle_login(){
    $username = empty($_POST['username'])?'':$_POST['username'];
    $password = empty($_POST['password'])?'':$_POST['password'];
    
    $loginURL = "../../pages/mechanic_login.php";
    
    if($username="test"&& $password=="pass"){
        setcookie('username', $username);
        header("Location: https://www.google.com/");
    }else if($username!="test"){
        $error= "Error: Incorect username";
        require $loginURL;
    }else if($password!="pass"){
        $error = "Error: Incorrect password";
        require $loginURL;
    }else{
        $error = "Error: Incorrect username or passowrd";
        require $loginURL;
    }
}

function login_form(){
    $username = "";
    $error = "";
    require "../../pages/mechanic_login.php";
}
?>