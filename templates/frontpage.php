<?php

    include "inc/header.php";

?>



    <div class="container">
        <!-- Example row of columns -->
        <div class="row">
        <!-- <div class="col-md-4">
            <h2>Heading</h2>
            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
            <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
        </div>
        <div class="col-md-4">
            <h2>Heading</h2>
            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
            <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
        </div> -->

        <?php foreach($jobs as $job): ?>
        
        <div class="col-md-4">
            <h2><?php echo $job->job_title; ?></h2>
            <p><?php echo $job->description; ?></p>
            <p><a class="btn btn-secondary" href="#" role="button">View</a></p>
        </div>

        <?php endforeach; ?>


        </div>

        <hr>

    </div> <!-- /container -->

    </main>


<?php
    include "inc/footer.php";

?>