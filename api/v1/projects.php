<?php

    header("Content-Type: apllication/json");
    require_once '../classes/Project.php';
    use project\Project;

    /////////////////////////////////////////
    //$method = $_SERVER['REQUEST_METHOD']; 
    $lang = isset($_GET['lang']) ? $_GET['lang'] : 'en';

    Project::getAll($lang);

?>