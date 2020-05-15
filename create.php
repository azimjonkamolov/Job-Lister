<?php

    include_once "config/init.php"; 

    $job = new Job;

    if(isset($_POST['submit']))
    {
        $data = array();
        $data['job_title'] = $_POST['job_title'];
        $data['company'] = $_POST['company'];
        $data['location'] = $_POST['location'];
        $data['salary'] = $_POST['salary'];
        $data['category_id'] = $_POST['category'];
        $data['description'] = $_POST['description'];
        $data['contact_user'] = $_POST['contact_user'];
        $data['contact_email'] = $_POST['contact_email'];

        if($job->create($data))
        {
            redirect('index.php', 'message success', 'success');
        }
        else
        {
            redirect('index.php', 'message error', 'success');
        }
    }



    $template = new Template("templates/job-create.php");
    
    $template->categories = $job->getCategories();
    
    echo $template;

?>