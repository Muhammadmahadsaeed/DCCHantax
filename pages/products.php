<?php require_once( '../config.php' );
$allProducts = 'SELECT DISTINCT p_name,p_url,p_img FROM add_product';
$product1 = 'select * from add_product where cat_1=1';
$product2 = 'select * from add_product where cat_2=1';
$product3 = 'select * from add_product where cat_3=1';
$product4 = 'select * from add_product where cat_4=1';
$product5 = 'select * from add_product where cat_5=1';

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
                    <h2 class="page-header">OUR PRODUCTS</h2>

                </div>
            </div>
            <!-- Page Content -->
            <div class="ms-section__block">
                <div id="albums">
                    <!-- Sort -->
                    <ul class="filtr-btn">
                        <li data-filter="1" class="active">
                            <h6>all</h6>
                        </li>
                        <li data-filter="2">
                            <h6>Physics </h6>
                        </li>
                        <li data-filter="3">
                            <h6> civil engineering</h6>
                        </li>
                        <li data-filter="4">
                            <h6>earth sciences</h6>
                        </li>
                        <li data-filter="5">
                            <h6>Teaching Aids</h6>
                        </li>
                        <li data-filter="6">
                            <h6>nano technology</h6>
                        </li>


                    </ul>

                    <div class="filtr-container row">
                         <!-- Album item -->
                        <?php 
                            if ($result = mysqli_query($link, $allProducts)) {
                            if (mysqli_num_rows($result) > 0) {
                        ?>
                        <?php
                            while ($row = mysqli_fetch_array($result)) { ?>
                            <div class="album-item col-md-4 filtr-item" data-category="1">
                                 
                                <a href="<?= $row['p_url'] ?>" target="_blank"  >
                                    <div class="album-item__overlay">
                                        <span class="album-item__cover"></span>
                                        <h5><?= strtoupper($row['p_name']) ?></h5>
                                    </div>
                                    <div class="album-item__img">
                                        <img src="../admin/Dashboard/pages/examples/images/<?= $row['p_img'] ?>"
                                            alt="" srcset="">
                                    </div>
                                </a>
                            </div>

                        <?php
                        }
                        mysqli_free_result($result);
                        } 
                         
                        } 
                        else {
                            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                        }
                        ?>
                        <!-- Album item -->
                        <?php 
                            if ($result = mysqli_query($link, $product1)) {
                            if (mysqli_num_rows($result) > 0) {
                        ?>
                        <?php
                        while ($row = mysqli_fetch_array($result)) { ?>
                            <div class="album-item col-md-4 filtr-item" data-category="2">
                                <a href="<?= $row['p_url'] ?>"  target="_blank">
                                    <div class="album-item__overlay">
                                        <span class="album-item__cover"></span>
                                        <h5><?= strtoupper($row['p_name']) ?></h5>
                                    </div>
                                    <div class="album-item__img">
                                        <img src="../admin/Dashboard/pages/examples/images/<?= $row['p_img'] ?>"
                                            alt="" srcset="">
                                    </div>
                                </a>
                            </div>
                        <?php
                            }
                            mysqli_free_result($result);
                        } 
                        } 
                        else {
                            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                        }
                        ?>
                        <!-- Album item -->
                        <?php 
                            if ($result = mysqli_query($link, $product2)) {
                            if (mysqli_num_rows($result) > 0) {
                        ?>
                        <?php
                            while ($row = mysqli_fetch_array($result)) { ?>
                            <div class="album-item col-md-4 filtr-item" data-category="3">
                                 
                                <a href="<?= $row['p_url'] ?>" target="_blank"  >
                                    <div class="album-item__overlay">
                                        <span class="album-item__cover"></span>
                                        <h5><?= strtoupper($row['p_name']) ?></h5>
                                    </div>
                                    <div class="album-item__img">
                                        <img src="../admin/Dashboard/pages/examples/images/<?= $row['p_img'] ?>"
                                            alt="" srcset="">
                                    </div>
                                </a>
                            </div>

                        <?php
                        }
                        mysqli_free_result($result);
                        } 
                         
                        } 
                        else {
                            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                        }
                        ?>
                        <!-- Album item -->
                        <?php 
                            if ($result = mysqli_query($link, $product3)) {
                            if (mysqli_num_rows($result) > 0) {
                        ?>
                        <?php
                        while ($row = mysqli_fetch_array($result)) { ?>
                            <div class="album-item col-md-4 filtr-item" data-category="4">
                                <a href="<?= $row['p_url'] ?>"  target="_blank">
                                    <div class="album-item__overlay">
                                        <span class="album-item__cover"></span>
                                        <h5><?= strtoupper($row['p_name']) ?></h5>
                                    </div>
                                    <div class="album-item__img">
                                        <img src="../admin/Dashboard/pages/examples/images/<?= $row['p_img'] ?>"
                                            alt="" srcset="">
                                    </div>
                                </a>
                            </div>
                        <?php
                            }
                            mysqli_free_result($result);
                        } 
                        } 
                        else {
                            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                        }
                        ?>
       <!-- Album item -->
       <?php 
                  if ($result = mysqli_query($link, $product4)) {
                  if (mysqli_num_rows($result) > 0) {
              ?>
                <?php
                while ($row = mysqli_fetch_array($result)) { ?>
                        <div class="album-item col-md-4 filtr-item" data-category="5">
                            <a href="<?= $row['p_url'] ?>" target="_blank">
                                <div class="album-item__overlay">
                                    <span class="album-item__cover"></span>
                                    <h5><?= strtoupper($row['p_name']) ?></h5>
                                </div>
                                <div class="album-item__img">
                                    <img src="../admin/Dashboard/pages/examples/images/<?= $row['p_img'] ?>"
                                        alt="" srcset="">
                                </div>
                            </a>
                        </div>
                        <?php
                            }
                            mysqli_free_result($result);
                        } 
                        } else {
                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                        }
                        ?>
                               <!-- Album item -->
                               <?php 
                  if ($result = mysqli_query($link, $product5)) {
                  if (mysqli_num_rows($result) > 0) {
              ?>
                <?php
                while ($row = mysqli_fetch_array($result)) { ?>
                        <div class="album-item col-md-4 filtr-item" data-category="6">
                            <a href="<?= $row['p_url'] ?>" target="_blank">
                                <div class="album-item__overlay">
                                    <span class="album-item__cover"></span>
                                    <h5><?= strtoupper($row['p_name']) ?></h5>
                                </div>
                                <div class="album-item__img">
                                    <img src="../admin/Dashboard/pages/examples/images/<?= $row['p_img'] ?>"
                                        alt="" srcset="">
                                </div>
                            </a>
                        </div>
                        <?php
                            }
                            mysqli_free_result($result);
                        } 
                        } else {
                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                        }
                        ?>
                             
                         <!-- Album item -->
                         <?php 
                  if ($result = mysqli_query($link, $product5)) {
                  if (mysqli_num_rows($result) > 0) {
              ?>
                <?php
                while ($row = mysqli_fetch_array($result)) { ?>
                        <div class="album-item col-md-4 filtr-item" data-category="5">
                            <a href="<?= $row['p_url'] ?>" target="_blank">
                                <div class="album-item__overlay">
                                    <span class="album-item__cover"></span>
                                    <h5><?= strtoupper($row['p_name']) ?></h5>
                                </div>
                                <div class="album-item__img">
                                    <img src="../admin/Dashboard/pages/examples/images/<?= $row['p_img'] ?>"
                                        alt="" srcset="">
                                </div>
                            </a>
                        </div>
                        <?php
                            }
                            mysqli_free_result($result);
                        } 
                        } else {
                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                        }
                        ?>
                             
                       

                    </div>
                </div>
            </div>
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
    <script type="text/javascript" src='./assets/js/jquery-3.2.1.min.js'></script>
    <!-- Vendors -->
    <script type="text/javascript" src='./assets/js/plugins.min.js'></script>
    <!-- Main js -->
    <script type='text/javascript' src='./assets/js/main.js'></script>
</body>

</html>