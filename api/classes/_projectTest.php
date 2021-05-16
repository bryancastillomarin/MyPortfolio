<?php

    require_once './Project.php';

    $project1 = new Project('url', 'image', 'english', 'español');

    echo $project1->toString();

?>