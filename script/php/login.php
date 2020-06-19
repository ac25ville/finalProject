<?php
#../../pages/mechanic_pages/mechanic_page.php
#../../pages/mechanic_login.php

$username = empty($_COOKIE['username']) ? '' : $_COOKIE['username'];
	
	// If the user is logged in, redirect them home
	if ($username) {
//		header("Location: page1.php");
        echo "cookie already exists";
		exit;
	}
	
	
	// Pull out any "action" from $_POST
	$action = empty($_POST['action']) ? '' : $_POST['action'];
	
	if ($action == 'do_login') {
		// If the action is "do_login", then the form was submitted
		handle_login();
	} else {
		// Else, the form wasn't submitted, so present the login
		login_form();
	}
	
	function handle_login() {
		$username = empty($_POST['username']) ? '' : $_POST['username'];
		$password = empty($_POST['password']) ? '' : $_POST['password'];
	   
        // Check the username and password
		if ($username == "test" && $password == "pass") {
            // If they match, set a cookie and send the user to page1.php
			setcookie('username', $username);
			header("Location: ../../pages/mechanic_pages/mechanic_page.php");
			exit;
		} else {
			$error = 'Error: Incorrect username or password';
//			require "login_form.php";
            echo "cookie not created";
            exit;
		}		
	}
	
	function login_form() {
		$username = "";
		$error = "";
//		require "login_form.php";
        echo "login form function";
        exit;
	}

?>

