<?php
#../../pages/mechanic_pages/mechanic_page.php
#../../pages/mechanic_login.php

if($username){
    header("Location: ../../pages/mechanic_pages/mechanic_page.php");
    exit;
}

$action = empty($_POSTS['action'])?'':$_POST['action'];

if($action == 'do_login'){
    handle_login();
}else{
    login_form();
}

function handle_login(){
    
}

function login_form(){
    $username="";
    $error="";
    require "../../pages/mechanic_login.php";
}

?>

