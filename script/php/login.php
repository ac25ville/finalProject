<?php
#../../pages/mechanic_pages/mechanic_page.php
#../../pages/mechanic_login.php

$username = empty($_COOKIE['username'])?"":$_COOKIE['username'];

if($username){
//    header("Location: ../../pages/mechanic_pages/mechanic_page.php");
    echo "cookie already exists";
    exit;
}

$action = empty($_POST['action'])?'':$_POST['action'];

if($action == 'do_login'){
    handle_login();
}else{
    login_form();
}

function handle_login(){
    $username = empty($_POST['username'])?"": $_POST['username'];
    $password = empty($_POST['password'])?"": $_POST['password'];
    
    if($username=="test" && $password=="pass"){
        setcookie("username", $username);
        header("Location: ../../pages/mechanic_pages/mechanic_page.php");
//        echo "cookie created";
        exit;
    }else{
        $error = "Error: Incorrect username or password";
        echo "cookie not created";
        exit;
//        require "../../pages/mechanic_login.php";
    }
}

function login_form(){
    $username="";
    $error="";
    require "../../pages/mechanic_login.php";
}

?>

