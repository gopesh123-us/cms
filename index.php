<body>
    <?php
    include_once './includes/header.include.php';
    include_once './classes/mypdo.class.php';
    include_once './classes/dbh.class.php';
    include_once './classes/categories.class.php';
    include_once './classes/categoriesView.class.php';

    include_once 'classes/blogpost.class.php';
    include_once 'classes/blogpostView.class.php';

    ?>
    <!-- Navigation -->
    <?php
    include './includes/navigation.include.php'
    ?>
    <!-- Page Content -->
    <!-- container -->
    <div class="container">

        <div class="row">
            <!-- Blog Entries Column -->
            <?php
            include_once './includes/blogpost.include.php';
            ?>
            <!-- Blog Sidebar Widgets Column -->
            <?php
            include './includes/sidebar.include.php';
            ?>
        </div>
        <!-- /.row -->
        <hr>
        <!-- Footer -->
        <?php
        include './includes/footer.include.php';
        ?>
    </div>
    <!-- /.container -->

    <!-- scripts -->
    <?php
    include './includes/scripts.include.php';
    ?>
    <!-- /.scripts -->
</body>

</html>