<?php
    if(isset($_POST['lang'])) {
        $lang = $_POST['lang'];
        require_once "$lang.php";
    } else {
        require_once 'es.php';
    }
?>