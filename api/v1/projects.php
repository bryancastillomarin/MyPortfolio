<?php

    header("Content-Type: apllication/json");
    require_once '../classes/Project.php';
    use project\Project;

    /////////////////////////////////////////
    $allProjects = Project::getAll();
    //echo json_encode($allProjects);
    //echo $allProjects;

    //foreach($allProjects as $project) {
    //    echo json_encode($project);
            /*
            $project['id'] ." --- ".
            $project['image'] ." --- ".
            $project['description'] ." --- ".
            $project['technology1'] ." --- ".
            $project['technology2'] ." --- ".
            $project['technology3'] ."\n"
            ;
        */
    //}

?>