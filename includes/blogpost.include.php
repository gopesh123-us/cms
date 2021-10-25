<div class="col-md-8">
    <h1 class="page-header">
        Page Heading
        <small>Secondary Text</small>
    </h1>
    <?php
    // 1. grabs data 
    // 2. invokes view class
    $blogpostView = new BlogPostView();
    $blogposts = $blogpostView->getblogpostDataAll();
    // 3. display data
    foreach ($blogposts as $blogpost) {
        # code...
    }
    // 4. returns back to home page
    ?>
    <!-- First Blog Post -->
    <h2>
        <?php
        echo "<a href='#'>{$blogpost['post_title']}</a>";
        ?>
    </h2>
    <p class="lead">
        by <?php echo "<a href='index.php'>{$blogpost['post_author']}</a>" ?>
    </p>
    <p><span class="glyphicon glyphicon-time"></span> Posted on <?php echo "August 28, 2013" ?> at <?php echo "10:00 PM" ?></p>

    <hr>
    <img class="img-responsive" src="images/<?php echo $blogpost['post_image'] ?>/900x400" alt="">
    <hr>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore, veritatis, tempora, necessitatibus inventore nisi quam quia repellat ut tempore laborum possimus eum dicta id animi corrupti debitis ipsum officiis rerum. lorem150</p>
    <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

    <hr>

    <?php
    include 'includes/pager.include.php';
    ?>
</div>