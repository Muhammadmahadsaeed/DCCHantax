<?php 
require_once( '../config.php' );
?>
<!DOCTYPE html>
<html>



<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>AIDL - Associated Instruments Distributors (Pvt) Limited</title>
    <!-- Metadata -->
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="assets/images/ico/favicon.ico" />
    <!-- CSS Plugins -->
    <link rel="stylesheet" href="assets/css/plugins.min.css">
    <!-- Custom CSS File -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <div class="ms-main-container">
        <!-- Preloader -->
        <div class="ms-preloader"></div>
        <!-- Header -->
        <header class="ms-header">
            <nav class="ms-nav">
                <div class="ms-logo">
                    <a href="../" data-type="page-transition">
                         <div class="logo-dark "><img src="logo-dark.svg" alt="logo image"></div>
                        <div class="logo-light current"><img src="logo-light.svg" alt="logo image"></div>
                    </a>
                </div>
                <button class="hamburger" type="button" data-toggle="navigation">
                    <span class="hamburger-box">
                        <span class="hamburger-label">menu</span>
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
                <div class="height-full-viewport">
                    <ul class="ms-navbar">
                        <!-- Nav Link -->
                        <li class="nav-item">
                            <a href="../" data-type="page-transition">
                                <span class="ms-btn">home</span>

                            </a>
                        </li>
                        <!-- Nav Link -->
                        <!-- Nav Link -->
                        <li class="nav-item">
                            <a href="./about.php" data-type="page-transition">
                                <span class="ms-btn">about us</span>

                            </a>

                        </li>
                        <!-- Nav Link -->
                        <li class="nav-item">
                            <a href="./ourTeams.php" data-type="page-transition">
                                <span class="ms-btn">our team</span>

                            </a>
                        </li>
                        <!-- Nav Link -->
                        <!-- Nav Link -->
                        <li class="nav-item">
                            <a href="./products.php" data-type="page-transition">
                                <span class="ms-btn">product</span>

                            </a>
                        </li>
                        <!-- Nav Link -->
                        <!-- Nav Link -->
                        <li class="nav-item">
                            <a href="./albums.php" data-type="page-transition">
                                <span class="ms-btn">gallery</span>

                            </a>
                        </li>
                        <!-- Nav Link -->
                        <li class="nav-item">
                            <a href="./contact.php" data-type="page-transition">
                                <span class="ms-btn">contact</span>

                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="./ourClients.php" data-type="page-transition">
                                <span class="ms-btn">our clients</span>

                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="./promotions.php" data-type="page-transition">
                                <span class="ms-btn">promotions</span>

                            </a>
                        </li>

                        <!-- Nav Link -->
                        <li class="nav-item">
                            <a href="./blog.php" data-type="page-transition">
                                <span class="ms-btn">blog</span>

                            </a>
                        </li>


                    </ul>
                </div>
            </nav>
        </header>
        <!-- Container -->
        <main class="ms-container">
            <!-- Page Title -->
            <div class="ms-section__block">
                <div class="ms-page-title">
                    <h2 class="page-header">OUR BLOGS</h2>

                </div>
            </div>
            <!-- Page Content -->
            <div class="ms-section__block">
                <?php 
                $selectBlog = mysqli_query($link,"SELECT blog.blog_name,blog.blog_id,blog.create_on, blog_images.blog_image
                FROM blog
                INNER JOIN blog_images ON blog.blog_name = blog_images.blog_name;");
              
                if (mysqli_num_rows($selectBlog) > 0) {
              ?>
                <div id="blog" class="row">

                    <!-- Post Item -->
                    <?php
                  while ($row = mysqli_fetch_array($selectBlog)) {
                
              ?>
                    <div class="post-item col-lg-6 col-md-6 col-sm-6">


                        <div class="post-item__img">

                            <img src="../admin/Dashboard/pages/examples/BlogImages/<?= $row['blog_image'] ?>"
                                alt="img">

                        </div>

                        <div class="post-item__info">
                            <h5 class="post-item__title"><?= strtoupper($row['blog_name']) ?></h5>
                            <div class="post-item__date"><?= $row['create_on'] ?></div>
                            <div class="post-item__link">
                               
                                <a href="../admin/Dashboard/pages/examples/viewBlogDetail.php?id=<?= $row['blog_id'] ?>" target="_blank"> read more</a>
                            </div>
                        </div>

                    </div>
                    <?php } ?>
                </div>
                <?php } ?>
            </div>
            <!-- <div class="ms-section__block center-block">
          <a href="#" class="ms-button" data-title="load more" data-type="page-transition">load more</a>
        </div> -->
        </main>
        <!-- Footer -->
        <!--<footer>-->
        <!--    <div class="ms-footer">-->
        <!--        <div class="copyright"> Developed by <a href="http://softwarechimps.com/"-->
        <!--                target="_blank">Softwarechimps.com</a></div>-->

        <!--    </div>-->
        <!--</footer>-->
    </div>
    <!-- JS Libraries -->
    <!-- jquery-2.1.3.min js -->
    <script type="text/javascript" src='assets/js/jquery-3.2.1.min.js'></script>
    <!-- Vendors -->
    <script type="text/javascript" src='assets/js/plugins.min.js'></script>
    <!-- Main js -->
    <script type="text/javascript" src="assets/js/main.js"></script>
</body>


</html>