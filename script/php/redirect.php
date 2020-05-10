<?php
//    if ($_SERVER['HTTPS']!=on) {
//    $location = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
////    header('HTTP/1.1 301 Moved Permanently');
//    header('Location: ' . $location);
//    exit();
//    }

    if($_SERVER['HTTPS']!==on){
        $redirectURL = "https://".$_SERVEr['HTTP_HOST'].$_SERVER['REQUEST_URI'];
        header("Location: $redirectURL");
        exit;
    }
?>