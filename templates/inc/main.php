<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
        <div class="container">
        <br><br><br>
        <h1 class="display-3">Hello, Vacancies!</h1>
        <p>This is a website were you can find reliable jobs and can contact with companies and our future 
        goal is to create app and make this one of the main job search platforms in the World!. We wish you the best luck to find your dream job with a little help of us.</p>

        <form method="GET" action="index.php" style="text-align: center;">

            <select name="category" class="form-control">
                <option value="0">Choose Category</option>
                <?php foreach($categories as $category): ?>
                    <option value="<?php echo $category->id; ?>"><?php echo $category->name; ?></option>
                <?php endforeach ?>

                <input type="submit" class="btn btn-lg btn-success" value="FIND" style="margin-top:10px;">
            </select>

        </form>

        
        </div>
    </div>