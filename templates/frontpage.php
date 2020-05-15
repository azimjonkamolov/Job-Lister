<?php   include "inc/header.php";   ?>
<?php   include "inc/main.php";   ?>



    <div class="container">



        <!-- Example row of columns -->
        <h3><?php echo $title ?></h3>
        <br>
        <div class="row">
 
        <?php foreach($jobs as $job): ?>
            <div class="col-md-4" style="padding-bottom: 20px;">
                <h2><?php echo $job->job_title; ?></h2>
                <p><?php echo $job->description; ?></p>
                <a class="btn btn-secondary" href="job.php?id=<?php echo $job->id; ?>">View</a>
            </div>
        <?php endforeach; ?> 


        </div>

        <hr>

    </div> <!-- /container -->

    </main>


<?php   include "inc/footer.php";   ?>