<?php

    include_once "config/init.php"; 

    $job = new Job;

    $template = new Template("templates/frontpage.php"); 

    $template->title = "Job Finder";
    $template->jobs = $job->getAllJobs();
    $template->categories = $job->getCategories();
    
    
    echo $template;

?>

