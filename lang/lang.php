<?php

    session_start();
    $language = 'en';

    if(isset($_GET['lang'])) {
        $language = $_GET['lang'];
        if(!empty($language)) {
            $_SESSION['lang'] = $language;
        }
    }

    if(isset($_SESSION['lang'])) {
        $language = $_SESSION['lang'];
        require_once "$language.php";
    } else {
        require_once "en.php"; //default language: english
    }
?>