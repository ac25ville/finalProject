<?php

$username = empty($_COOKIE['_lin'])?'':$_COOKIE['_lin'];

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
    if($username=="test" && $password=="pass"){
        setcookie('_lin', $username);
        header("Location: /mechanic_pages/mechanic_page.php");
        exit;
    }else if($username!="test"){
        $error= "Error: Incorect username";
        require "mechanic_login.php";
    }else if($password!="pass"){
        $error = "Error: Incorrect password";
        require "mechanic_login.php";
    }else{
        $error = "Error: Incorrect username or passowrd";
        require "mechanic_login.php";
    }
}

function login_form(){
    $username = "";
    $error = "";
    require "mechanic_login.php";
}
?>