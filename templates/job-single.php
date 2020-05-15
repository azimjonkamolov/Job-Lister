<?php   include "inc/header.php";   ?>
<?php 
    session_start();
    $id = $_GET['id']; 
?>

<br><br>

<?php

    $conn = mysqli_connect('localhost', 'root', '');

    mysqli_select_db($conn, 'joblister');

    $query = "SELECT * FROM jobs WHERE id = '$id' ";

    $results = mysqli_query($conn, $query) or die(mysqli_error($conn));

?>

<div class="container" style="margin-top: 80px;">

<?php
    while($row= mysqli_fetch_assoc($results))
    {
?>
    <h2 class="page-header"><?php echo $row['job_title'];  ?></h2>

    <small>Posted by <?php echo $row['contact_user'];  ?> on <?php echo $row['post_date'];  ?> </small>

    <hr>

    <ul class="list-group">
        
        <li class="list-group-item"> <strong> Description: </strong>
        <?php echo $row['description'];  ?>
        </li>
        <li class="list-group-item"> <strong> Company: </strong> <?php echo $row['company'];  ?> </li>
        <li class="list-group-item"> <strong> Salary: </strong> <?php echo $row['salary'];  ?> </li>
        <li class="list-group-item"> <strong> Contact email: </strong> <?php echo $row['contact_email'];  ?> </li>
        <li class="list-group-item"> <strong> Location: </strong> <?php echo $row['location'];  ?> </li>

    </ul>

    <?php   } // WHILE ENDS HERE   ?>

    <br><br>

    <a class="btn btn-dark" href="index.php"> Go back </a>

    <br><br><br><br>

</div>


<hr>

<?php   include "inc/footer.php";   ?>