<?php

    if(isset($_GET['lang'])) {
        $language = $_GET['lang'];
        $file = "$language.php";
        try {
            if(!file_exists($file)){
                throw new Exception ('File not found');
            } else {
                require_once $file;
            }
        }catch (Exception $e) {
            require_once "en.php"; //english by default, language doesn't exist (file not found)
        }
    } else {
        require_once "en.php"; //english by default, no request has been sent yet
    }

    echo json_encode($lang, JSON_UNESCAPED_UNICODE);
?>