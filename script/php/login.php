<?php

$username = empty($_COOKIE['_lin'])?NULL:$_COOKIE['_lin'];

if(!is_null($username)){
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
    $failRedirect = "Location: ../../pages/mechanic_login.php";
    if($username=="test" && $password=="pass"){
        setcookie('_lin', $username);
//        echo $username. " " .$password;
        echo "1";
//        header("Location: ../../pages/mechanic_pages/mechanic_page.php");
        exit;
    }else if($username!="test" && $password!="pass"){
        $error = "Error: Incorrect username or password";
//        echo $error;
//        exit;
        requireRedirect($failRedirect);
    }else if($password!="pass"){
        $error = "Error: Incorrect password";
//        echo $error;
//        exit;
        requireRedirect($failRedirect);
    }else if($username!="test"){
        $error= "Error: Incorrect username";
//        echo $error;
//        exit;
        requireRedirect($failRedirect);
    }else{
        echo "Last block";
        exit;
    }
}

function requireRedirect($loc){
    header($loc);
    exit;
}

function login_form(){
    echo "3";
    $username = "";
    $error = "";
    exit;
//    require "mechanic_login.php";
}
?>