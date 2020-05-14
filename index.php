<?php

    include_once "config/init.php"; 

    $template = new Template("templates/frontpage.php");

    $template->title = "Job Finder";
    
    
    echo $template;

?>

