<?php

    header("Content-Type: apllication/json");
    require_once '../classes/Skill.php';
    use skill\Skill;

    /////////////////////////////////////////
    //$method = $_SERVER['REQUEST_METHOD'];
    Skill::getAll();

?>