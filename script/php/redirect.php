<?php
    if($_SERVER['HTTPS']!==on){
        $redirectURL = "https://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
        header("Location: $redirectURL");
        exit;
    }
?>