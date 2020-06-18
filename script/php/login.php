<?php

$username = empty($_COOKIE['username'])?'':$_COOKIE['username'];

if($username){
    echo "mechanic page";
    exit;
}

$action = empty($_POST['action'])?'':$_POST['action'];

if($action == 'do_login'){
    handle_login();
}else{
    login_form();
}

function handle_login(){
    $username = empty($_POST['username'])?'':$_POST['username'];
    $password = empty($_POST['password'])?'':$_POST['password'];
    
    if($username=="test" && $password=="pass"){
        setcookie('username', $username);
        echo "cookie set as username: ".$username;
        exit;
    }else{
        $error = "Error: Incorrect username and/or password";
        header("Location: ../../pages/mechanic_login.php");
        exit;
    }
    
}

function login_form(){
    $username = "";
    $error = "";
    echo "require mechanic login";
    exit;
}
?>