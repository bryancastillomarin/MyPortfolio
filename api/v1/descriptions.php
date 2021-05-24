<?php

    header("Content-Type: apllication/json");
    require_once '../classes/Project.php';
    use project\Project;

    $lang = isset($_GET['lang']) ? $_GET['lang'] : 'en';

    Project::getDescriptions($lang);

?>