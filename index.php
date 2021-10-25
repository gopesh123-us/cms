<body>
    <?php
    include_once './includes/header.php';
    include_once './classes/mypdo.class.php';
    include_once './classes/dbh.class.php';
    include_once './classes/categories.class.php';
    include_once './classes/categoriesView.class.php';
    ?>
    <!-- Navigation -->
    <?php
    include './includes/navigation.php'
    ?>
    <!-- Page Content -->
    <!-- container -->
    <div class="container">

        <div class="row">
            <!-- Blog Entries Column -->
            <?php
            include './includes/blogposts.php';
            ?>
            <!-- Blog Sidebar Widgets Column -->
            <?php
            include './includes/sidebar.php';
            ?>
        </div>
        <!-- /.row -->
        <hr>
        <!-- Footer -->
        <?php
        include './includes/footer.php';
        ?>
    </div>
    <!-- /.container -->

    <!-- scripts -->
    <?php
    include './includes/scripts.php';
    ?>
    <!-- /.scripts -->
</body>

</html>