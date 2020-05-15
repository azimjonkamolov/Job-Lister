<?php   include "inc/header.php";   ?>

<br><br><br><br><br>

<div class="container">

    <div class="form-group" style="text-align: center;">
        <h1> Enter Your Form Here </h1>
    </div>

    <form action="create.php" method="post">

        <div class="form-group">
            <input type="text" name="company" class="form-control" placeholder="Enter Company Name">
        </div>

        <div class="form-group">
            <select class="form-control" name="category">
                <option value="0">Choose Category From Bellow Otherwise Will Not Be Able To Post</option>
                <?php foreach($categories as $category): ?>
                    <option value="<?php echo $category->id; ?>" required><?php echo $category->name; ?></option>
                <?php endforeach ?>
            </select>
        </div>

        <div class="form-group">
            <input type="text" name="job_title" class="form-control" placeholder="Enter Job Title">
        </div>

        <div class="form-group">
            <input type="text" name="salary" class="form-control" placeholder="Enter Salary Offer">
        </div>

        <div class="form-group">
            <input type="text" name="location" class="form-control" placeholder="Enter Your Location">
        </div>

        <div class="form-group">
            <textarea type="text" name="description" rows="7" class="form-control" placeholder="Enter Description"></textarea>
        </div>

        <div class="form-group">
            <input type="text" name="contact_user" class="form-control" placeholder="Enter Contact Person's Name">
        </div>

        <div class="form-group">
            <input type="text" name="contact_email" class="form-control" placeholder="Enter Contact Email">
        </div>
        
        <input type="submit" class="btn btn-secondary" value="Submit" name="submit">

    </form>

<div class="container">

<hr>

<?php   include "inc/footer.php";   ?>