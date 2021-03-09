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
     <!-- light box -->

    <link href='./simplelightbox/dist/simplelightbox.min.css' rel='stylesheet' type='text/css'>
    <link href='./simplelightbox/demo/demo.css' rel='stylesheet' type='text/css'>

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
                    <h2 class="page-header">OUR GALLERY</h2>

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
                            <h6>Alser</h6>
                        </li>
                        <li data-filter="3">
                            <h6>Buhler</h6>
                        </li>
                        <li data-filter="4">
                            <h6>Edwards</h6>
                        </li>
                        <li data-filter="5">
                            <h6>Suss</h6>
                        </li>

                        <li data-filter="6">
                            <h6>Metkon</h6>
                        </li>
                        <li data-filter="7">
                            <h6>Micos Laser</h6>
                        </li>
                        <li data-filter="8">
                            <h6>Neocera</h6>
                        </li>
                        <li data-filter="9">
                            <h6>Pasco</h6>
                        </li>
                        <li data-filter="10">
                            <h6>RBRL</h6>
                        </li>
                        <li data-filter="11">
                            <h6>Sentech</h6>
                        </li>
                        <li data-filter="12">
                            <h6>Shore Western</h6>
                        </li>
                    </ul>

                    <div class="filtr-container">
                         <!-- Album item -->
                        <?php 
                        $res = mysqli_query($link,"SELECT * FROM photos");
                         
                              
                          
                        ?>
                        
                        <?php while($row = mysqli_fetch_array($res)){?>
                        <div class=" col-md-3 filtr-item" data-category="1">

                            
                             <div class="gallery">
                                <a href="../admin/Dashboard/pages/examples/galleryImages/<?=$row['tittle']?>_<?=$row['images']?>">
                                    <img   src="../admin/Dashboard/pages/examples/galleryImages/<?=$row['tittle']?>_<?=$row['images']?>" alt="" title="" />
                                </a>
                            </div>
                               
                        </div>
                        <?php } ?>
                        <!--Album item close-->
                       <!-- Album item -->
                        <?php 
                        $res = mysqli_query($link,"SELECT * FROM photos where tittle = 'alser'");
                         
                              
                          
                        ?>
                        
                        <?php while($row = mysqli_fetch_array($res)){?>
                        <div class=" col-md-3 filtr-item" data-category="2">

                            
                             <div class="gallery">
                                <a href="../admin/Dashboard/pages/examples/galleryImages/<?=$row['tittle']?>_<?=$row['images']?>">
                                    <img   src="../admin/Dashboard/pages/examples/galleryImages/<?=$row['tittle']?>_<?=$row['images']?>" alt="" title="" />
                                </a>
                            </div>
                               
                        </div>
                        <?php } ?>
                        <!--Album item close-->
                        <!-- Album item open -->
                        <?php 
                        $res = mysqli_query($link,"SELECT * FROM photos where tittle = 'edmond_buhler'");
                         
                              
                          
                        ?>
                        
                        <?php while($row = mysqli_fetch_array($res)){?>
                        <div class=" col-md-3 filtr-item" data-category="3">

                            
                             <div class="gallery">
                                <a href="../admin/Dashboard/pages/examples/galleryImages/<?=$row['tittle']?>_<?=$row['images']?>">
                                    <img   src="../admin/Dashboard/pages/examples/galleryImages/<?=$row['tittle']?>_<?=$row['images']?>" alt="" title="" />
                                </a>
                            </div>
                               
                        </div>
                        <?php } ?>
                        <!--Album item close-->
                        <!-- Album item open-->
                        <?php 
                        $res = mysqli_query($link,"SELECT * FROM photos where tittle = 'edwards'");
                         
                              
                          
                        ?>
                        
                        <?php while($row = mysqli_fetch_array($res)){?>
                        <div class=" col-md-3 filtr-item" data-category="4">

                            
                             <div class="gallery">
                                <a href="../admin/Dashboard/pages/examples/galleryImages/<?=$row['tittle']?>_<?=$row['images']?>">
                                    <img  src="../admin/Dashboard/pages/examples/galleryImages/<?=$row['tittle']?>_<?=$row['images']?>" alt="" title="" />
                                </a>
                            </div>
                               
                        </div>
                        <?php } ?>
                        <!--Album item close-->
                        <!-- Album item open-->
                        <?php 
                        $res = mysqli_query($link,"SELECT * FROM photos where tittle = 'suss'");
                         
                              
                          
                        ?>
                        
                        <?php while($row = mysqli_fetch_array($res)){?>
                        <div class=" col-md-3 filtr-item" data-category="5">

                            
                             <div class="gallery">
                                <a href="../admin/Dashboard/pages/examples/galleryImages/<?=$row['tittle']?>_<?=$row['images']?>">
                                    <img   src="../admin/Dashboard/pages/examples/galleryImages/<?=$row['tittle']?>_<?=$row['images']?>" alt="" title="" />
                                </a>
                            </div>
                               
                        </div>
                        <?php } ?>
                        <!--Album item close-->
                        <!-- Album item open-->
                        <?php 
                        $res = mysqli_query($link,"SELECT * FROM photos where tittle = 'metkon'");
                         
                              
                          
                        ?>
                        
                        <?php while($row = mysqli_fetch_array($res)){?>
                        <div class=" col-md-3 filtr-item" data-category="6">

                            
                             <div class="gallery">
                                <a href="../admin/Dashboard/pages/examples/galleryImages/<?=$row['tittle']?>_<?=$row['images']?>">
                                    <img   src="../admin/Dashboard/pages/examples/galleryImages/<?=$row['tittle']?>_<?=$row['images']?>" alt="" title="" />
                                </a>
                            </div>
                               
                        </div>
                        <?php } ?>
                        <!--Album item close-->
                        <!-- Album item open-->
                        <?php 
                        $res = mysqli_query($link,"SELECT * FROM photos where tittle = 'micso_laser'");
                         
                              
                          
                        ?>
                        
                        <?php while($row = mysqli_fetch_array($res)){?>
                        <div class=" col-md-3 filtr-item" data-category="7">

                            
                             <div class="gallery">
                                <a href="../admin/Dashboard/pages/examples/galleryImages/<?=$row['tittle']?>_<?=$row['images']?>">
                                    <img     src="../admin/Dashboard/pages/examples/galleryImages/<?=$row['tittle']?>_<?=$row['images']?>" alt="" title="" />
                                </a>
                            </div>
                               
                        </div>
                        <?php } ?>
                        <!--Album item close-->
                        <!-- Album item open-->
                        <?php 
                        $res = mysqli_query($link,"SELECT * FROM photos where tittle = 'neocera'");
                         
                              
                          
                        ?>
                        
                        <?php while($row = mysqli_fetch_array($res)){?>
                        <div class=" col-md-3 filtr-item" data-category="8">

                            
                             <div class="gallery">
                                <a href="../admin/Dashboard/pages/examples/galleryImages/<?=$row['tittle']?>_<?=$row['images']?>">
                                    <img     src="../admin/Dashboard/pages/examples/galleryImages/<?=$row['tittle']?>_<?=$row['images']?>" alt="" title="" />
                                </a>
                            </div>
                               
                        </div>
                        <?php } ?>
                        <!--Album item close-->
                        <!-- Album item open-->
                        <?php 
                        $res = mysqli_query($link,"SELECT * FROM photos where tittle = 'pasco'");
                         
                              
                          
                        ?>
                        
                        <?php while($row = mysqli_fetch_array($res)){?>
                        <div class=" col-md-3 filtr-item" data-category="9">

                            
                             <div class="gallery">
                                <a href="../admin/Dashboard/pages/examples/galleryImages/<?=$row['tittle']?>_<?=$row['images']?>">
                                    <img     src="../admin/Dashboard/pages/examples/galleryImages/<?=$row['tittle']?>_<?=$row['images']?>" alt="" title="" />
                                </a>
                            </div>
                               
                        </div>
                        <?php } ?>
                        <!--Album item close-->
                        <!-- Album item open-->
                        <?php 
                        $res = mysqli_query($link,"SELECT * FROM photos where tittle = 'rbrl'");
                         
                              
                          
                        ?>
                        
                        <?php while($row = mysqli_fetch_array($res)){?>
                        <div class=" col-md-3 filtr-item" data-category="10">

                            
                             <div class="gallery">
                                <a href="../admin/Dashboard/pages/examples/galleryImages/<?=$row['tittle']?>_<?=$row['images']?>">
                                    <img     src="../admin/Dashboard/pages/examples/galleryImages/<?=$row['tittle']?>_<?=$row['images']?>" alt="" title="" />
                                </a>
                            </div>
                               
                        </div>
                        <?php } ?>
                        <!--Album item close-->
                        <!-- Album item open-->
                        <?php 
                        $res = mysqli_query($link,"SELECT * FROM photos where tittle = 'sentech'");
                         
                              
                          
                        ?>
                        
                        <?php while($row = mysqli_fetch_array($res)){?>
                        <div class=" col-md-3 filtr-item" data-category="11">

                            
                             <div class="gallery">
                                <a href="../admin/Dashboard/pages/examples/galleryImages/<?=$row['tittle']?>_<?=$row['images']?>">
                                    <img     src="../admin/Dashboard/pages/examples/galleryImages/<?=$row['tittle']?>_<?=$row['images']?>" alt="" title="" />
                                </a>
                            </div>
                               
                        </div>
                        <?php } ?>
                        <!--Album item close-->
                        <!-- Album item open-->
                        <?php 
                        $res = mysqli_query($link,"SELECT * FROM photos where tittle = 'shore_western'");
                         
                              
                          
                        ?>
                        
                        <?php while($row = mysqli_fetch_array($res)){?>
                        <div class=" col-md-3 filtr-item" data-category="12">

                            
                             <div class="gallery">
                                <a href="../admin/Dashboard/pages/examples/galleryImages/<?=$row['tittle']?>_<?=$row['images']?>">
                                    <img     src="../admin/Dashboard/pages/examples/galleryImages/<?=$row['tittle']?>_<?=$row['images']?>" alt="" title="" />
                                </a>
                            </div>
                               
                        </div>
                        <?php } ?>
                        <!--Album item close-->
                       
                    </div>
                </div>

            </div>
        </main>
    
        <!-- Footer -->
        <!--<footer>-->
        <!--    <div class="ms-footer">-->
        <!--        <div class="copyright"> Developed by <a href="http://softwarechimps.com/"-->
        <!--                target="_blank">Softwarechimps.com</a>-->
        <!--        </div>-->

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
    
   <!-- light box -->

    <script type="text/javascript" src="./simplelightbox/dist/simple-lightbox.js"></script>
    <script>
    $(function() {
        var $gallery = $('.gallery a').simpleLightbox();

        $gallery.on('show.simplelightbox', function() {
                console.log('Requested for showing');
            })
            .on('shown.simplelightbox', function() {
                console.log('Shown');
            })
            .on('close.simplelightbox', function() {
                console.log('Requested for closing');
            })
            .on('closed.simplelightbox', function() {
                console.log('Closed');
            })
            .on('change.simplelightbox', function() {
                console.log('Requested for change');
            })
            .on('next.simplelightbox', function() {
                console.log('Requested for next');
            })
            .on('prev.simplelightbox', function() {
                console.log('Requested for prev');
            })
            .on('nextImageLoaded.simplelightbox', function() {
                console.log('Next image loaded');
            })
            .on('prevImageLoaded.simplelightbox', function() {
                console.log('Prev image loaded');
            })
            .on('changed.simplelightbox', function() {
                console.log('Image changed');
            })
            .on('nextDone.simplelightbox', function() {
                console.log('Image changed to next');
            })
            .on('prevDone.simplelightbox', function() {
                console.log('Image changed to prev');
            })
            .on('error.simplelightbox', function(e) {
                console.log('No image found, go to the next/prev');
                console.log(e);
            });
    });
    </script>
</body>


</html>