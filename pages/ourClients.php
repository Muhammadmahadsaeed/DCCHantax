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
                    <a href="../"  >
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
                            <a href="../"  >
                                <span class="ms-btn">home</span>

                            </a>
                        </li>
                        <!-- Nav Link -->
                        <!-- Nav Link -->
                        <li class="nav-item">
                            <a href="./about.php"  >
                                <span class="ms-btn">about us</span>

                            </a>

                        </li>
                        <!-- Nav Link -->
                        <li class="nav-item">
                            <a href="./ourTeams.php"  >
                                <span class="ms-btn">our team</span>

                            </a>
                        </li>
                        <!-- Nav Link -->
                        <!-- Nav Link -->
                        <li class="nav-item">
                            <a href="./products.php"  >
                                <span class="ms-btn">product</span>

                            </a>
                        </li>
                        <!-- Nav Link -->
                        <!-- Nav Link -->
                        <li class="nav-item">
                            <a href="./albums.php"  >
                                <span class="ms-btn">gallery</span>

                            </a>
                        </li>
                        <!-- Nav Link -->
                        <li class="nav-item">
                            <a href="./contact.php"  >
                                <span class="ms-btn">contact</span>

                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="./ourClients.php"  >
                                <span class="ms-btn">our clients</span>

                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="./promotions.php"  >
                                <span class="ms-btn">promotions</span>

                            </a>
                        </li>

                        <!-- Nav Link -->
                        <li class="nav-item">
                            <a href="./blog.php"  >
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
                    <h2 class="page-header">OUR CLIENTS</h2>

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
                            <h6>a - e</h6>
                        </li>
                        <li data-filter="3">
                            <h6>f - j</h6>
                        </li>
                        <li data-filter="4">
                            <h6>k - o</h6>
                        </li>
                        <li data-filter="5">
                            <h6>p - t</h6>
                        </li>
                        <li data-filter="6">
                            <h6>u - z</h6>
                        </li>


                    </ul>

                    <div class="filtr-container row">
                        <!-- Album item -->
                        <?php 
                            $sql = "select * from add_client";
                            $result = mysqli_query($link,$sql);

                            if (mysqli_num_rows($result)  > 0) {
                            
                        ?>
                        
                        <?php while($row = mysqli_fetch_assoc($result)) {?>
                        <div class="album-item col-md-4 filtr-item" data-category="1">
                            <a href="#">
                                <div class="album-item__overlay">
                                    <span class="album-item__cover"></span>
                                    <h5><?=$row['cname']?></h5>
                                </div>
                                <div class="album-item__img">
                                    <img src="../admin/Dashboard/pages/examples/clientImages/<?= $row['cimage'] ?>"
                                        alt="" srcset="">
                                </div>
                            </a>
                        </div>
                        <?php }}?>
                        <!-- Album item -->
                        <!-- Album item -->
                        <?php 
                            $sql = "select * from add_client where cname like 'a%'";
                            $result = mysqli_query($link,$sql);

                            if (mysqli_num_rows($result)  > 0) {
                            
                        ?>
                        
                        <?php while($row = mysqli_fetch_assoc($result)) {?>
                        <div class="album-item col-md-4 filtr-item" data-category="2">
                            <a href="#">
                                <div class="album-item__overlay">
                                    <span class="album-item__cover"></span>
                                    <h5><?=$row['cname']?></h5>
                                </div>
                                <div class="album-item__img">
                                    <img src="../admin/Dashboard/pages/examples/clientImages/<?= $row['cimage'] ?>"
                                        alt="" srcset="">
                                </div>
                            </a>
                        </div>
                        <?php }}?>
                        <!-- Album item -->
                        <!-- Album item -->
                        <?php 
                            $sql = "select * from add_client where cname like 'b%'";
                            $result = mysqli_query($link,$sql);

                            if (mysqli_num_rows($result)  > 0) {
                            
                        ?>
                        
                        <?php while($row = mysqli_fetch_assoc($result)) {?>
                        <div class="album-item col-md-4 filtr-item" data-category="2">
                            <a href="#"    >
                                <div class="album-item__overlay">
                                    <span class="album-item__cover"></span>
                                    <h5><?=$row['cname']?></h5>
                                </div>
                                <div class="album-item__img">
                                    <img src="../admin/Dashboard/pages/examples/clientImages/<?= $row['cimage'] ?>"
                                        alt="" srcset="">
                                </div>
                            </a>
                        </div>
                        <?php }}?>
                        <!-- Album item -->
                        <!-- Album item -->
                        <?php 
                            $sql = "select * from add_client where cname like 'c%'";
                            $result = mysqli_query($link,$sql);

                            if (mysqli_num_rows($result)  > 0) {
                            
                        ?>
                        
                        <?php while($row = mysqli_fetch_assoc($result)) {?>
                        <div class="album-item col-md-4 filtr-item" data-category="2">
                            <a href="#"    >
                                <div class="album-item__overlay">
                                    <span class="album-item__cover"></span>
                                    <h5><?=$row['cname']?></h5>
                                </div>
                                <div class="album-item__img">
                                    <img src="../admin/Dashboard/pages/examples/clientImages/<?= $row['cimage'] ?>"
                                        alt="" srcset="">
                                </div>
                            </a>
                        </div>
                        <?php }}?>
                        <!-- Album item -->
                        <!-- Album item -->
                        <?php 
                            $sql = "select * from add_client where cname like 'd%'";
                            $result = mysqli_query($link,$sql);

                            if (mysqli_num_rows($result)  > 0) {
                            
                        ?>
                        
                        <?php while($row = mysqli_fetch_assoc($result)) {?>
                        <div class="album-item col-md-4 filtr-item" data-category="2">
                            <a href="#"    >
                                <div class="album-item__overlay">
                                    <span class="album-item__cover"></span>
                                    <h5><?=$row['cname']?></h5>
                                </div>
                                <div class="album-item__img">
                                    <img src="../admin/Dashboard/pages/examples/clientImages/<?= $row['cimage'] ?>"
                                        alt="" srcset="">
                                </div>
                            </a>
                        </div>
                        <?php }}?>
                        <!-- Album item -->
                        <!-- Album item -->
                        <?php 
                            $sql = "select * from add_client where cname like 'e%'";
                            $result = mysqli_query($link,$sql);

                            if (mysqli_num_rows($result)  > 0) {
                            
                        ?>
                        
                        <?php while($row = mysqli_fetch_assoc($result)) {?>
                        <div class="album-item col-md-4 filtr-item" data-category="2">
                            <a href="#"    >
                                <div class="album-item__overlay">
                                    <span class="album-item__cover"></span>
                                    <h5><?=$row['cname']?></h5>
                                </div>
                                <div class="album-item__img">
                                    <img src="../admin/Dashboard/pages/examples/clientImages/<?= $row['cimage'] ?>"
                                        alt="" srcset="">
                                </div>
                            </a>
                        </div>
                        <?php }}?>
                        <!-- Album item -->
                        <!-- Album item -->
                        <?php 
                            $sql = "select * from add_client where cname like 'f%'";
                            $result = mysqli_query($link,$sql);

                            if (mysqli_num_rows($result)  > 0) {
                            
                        ?>
                        
                        <?php while($row = mysqli_fetch_assoc($result)) {?>
                        <div class="album-item col-md-4 filtr-item" data-category="3">
                            <a href="#"    >
                                <div class="album-item__overlay">
                                    <span class="album-item__cover"></span>
                                    <h5><?=$row['cname']?></h5>
                                </div>
                                <div class="album-item__img">
                                    <img src="../admin/Dashboard/pages/examples/clientImages/<?= $row['cimage'] ?>"
                                        alt="" srcset="">
                                </div>
                            </a>
                        </div>
                        <?php }}?>
                        <!-- Album item -->
                        <!-- Album item -->
                        <?php 
                            $sql = "select * from add_client where cname like 'g%'";
                            $result = mysqli_query($link,$sql);

                            if (mysqli_num_rows($result)  > 0) {
                            
                        ?>
                        
                        <?php while($row = mysqli_fetch_assoc($result)) {?>
                        <div class="album-item col-md-4 filtr-item" data-category="3">
                            <a href="#"    >
                                <div class="album-item__overlay">
                                    <span class="album-item__cover"></span>
                                    <h5><?=$row['cname']?></h5>
                                </div>
                                <div class="album-item__img">
                                    <img src="../admin/Dashboard/pages/examples/clientImages/<?= $row['cimage'] ?>"
                                        alt="" srcset="">
                                </div>
                            </a>
                        </div>
                        <?php }}?>
                        <!-- Album item -->
                        <!-- Album item -->
                        <?php 
                            $sql = "select * from add_client where cname like 'h%'";
                            $result = mysqli_query($link,$sql);

                            if (mysqli_num_rows($result)  > 0) {
                            
                        ?>
                        
                        <?php while($row = mysqli_fetch_assoc($result)) {?>
                        <div class="album-item col-md-4 filtr-item" data-category="3">
                            <a href="#"    >
                                <div class="album-item__overlay">
                                    <span class="album-item__cover"></span>
                                    <h5><?=$row['cname']?></h5>
                                </div>
                                <div class="album-item__img">
                                    <img src="../admin/Dashboard/pages/examples/clientImages/<?= $row['cimage'] ?>"
                                        alt="" srcset="">
                                </div>
                            </a>
                        </div>
                        <?php }}?>
                        <!-- Album item -->
                        <!-- Album item -->
                        <?php 
                            $sql = "select * from add_client where cname like 'i%'";
                            $result = mysqli_query($link,$sql);

                            if (mysqli_num_rows($result)  > 0) {
                            
                        ?>
                        
                        <?php while($row = mysqli_fetch_assoc($result)) {?>
                        <div class="album-item col-md-4 filtr-item" data-category="3">
                            <a href="#"    >
                                <div class="album-item__overlay">
                                    <span class="album-item__cover"></span>
                                    <h5><?=$row['cname']?></h5>
                                </div>
                                <div class="album-item__img">
                                    <img src="../admin/Dashboard/pages/examples/clientImages/<?= $row['cimage'] ?>"
                                        alt="" srcset="">
                                </div>
                            </a>
                        </div>
                        <?php }}?>
                        <!-- Album item -->
                        <!-- Album item -->
                        <?php 
                            $sql = "select * from add_client where cname like 'j%'";
                            $result = mysqli_query($link,$sql);

                            if (mysqli_num_rows($result)  > 0) {
                            
                        ?>
                        
                        <?php while($row = mysqli_fetch_assoc($result)) {?>
                        <div class="album-item col-md-4 filtr-item" data-category="3">
                            <a href="#"    >
                                <div class="album-item__overlay">
                                    <span class="album-item__cover"></span>
                                    <h5><?=$row['cname']?></h5>
                                </div>
                                <div class="album-item__img">
                                    <img src="../admin/Dashboard/pages/examples/clientImages/<?= $row['cimage'] ?>"
                                        alt="" srcset="">
                                </div>
                            </a>
                        </div>
                        <?php }}?>
                        <!-- Album item -->
                        <!-- Album item -->
                        <?php 
                            $sql = "select * from add_client where cname like 'k%'";
                            $result = mysqli_query($link,$sql);

                            if (mysqli_num_rows($result)  > 0) {
                            
                        ?>
                        
                        <?php while($row = mysqli_fetch_assoc($result)) {?>
                        <div class="album-item col-md-4 filtr-item" data-category="4">
                            <a href="#"    >
                                <div class="album-item__overlay">
                                    <span class="album-item__cover"></span>
                                    <h5><?=$row['cname']?></h5>
                                </div>
                                <div class="album-item__img">
                                    <img src="../admin/Dashboard/pages/examples/clientImages/<?= $row['cimage'] ?>"
                                        alt="" srcset="">
                                </div>
                            </a>
                        </div>
                        <?php }}?>
                        <!-- Album item -->
                        <!-- Album item -->
                        <?php 
                            $sql = "select * from add_client where cname like 'l%'";
                            $result = mysqli_query($link,$sql);

                            if (mysqli_num_rows($result)  > 0) {
                            
                        ?>
                        
                        <?php while($row = mysqli_fetch_assoc($result)) {?>
                        <div class="album-item col-md-4 filtr-item" data-category="4">
                            <a href="#"    >
                                <div class="album-item__overlay">
                                    <span class="album-item__cover"></span>
                                    <h5><?=$row['cname']?></h5>
                                </div>
                                <div class="album-item__img">
                                    <img src="../admin/Dashboard/pages/examples/clientImages/<?= $row['cimage'] ?>"
                                        alt="" srcset="">
                                </div>
                            </a>
                        </div>
                        <?php }}?>
                        <!-- Album item -->
                        <!-- Album item -->
                        <?php 
                            $sql = "select * from add_client where cname like 'm%'";
                            $result = mysqli_query($link,$sql);

                            if (mysqli_num_rows($result)  > 0) {
                            
                        ?>
                        
                        <?php while($row = mysqli_fetch_assoc($result)) {?>
                        <div class="album-item col-md-4 filtr-item" data-category="4">
                            <a href="#"    >
                                <div class="album-item__overlay">
                                    <span class="album-item__cover"></span>
                                    <h5><?=$row['cname']?></h5>
                                </div>
                                <div class="album-item__img">
                                    <img src="../admin/Dashboard/pages/examples/clientImages/<?= $row['cimage'] ?>"
                                        alt="" srcset="">
                                </div>
                            </a>
                        </div>
                        <?php }}?>
                        <!-- Album item -->
                        <!-- Album item -->
                        <?php 
                            $sql = "select * from add_client where cname like 'n%'";
                            $result = mysqli_query($link,$sql);

                            if (mysqli_num_rows($result)  > 0) {
                            
                        ?>
                        
                        <?php while($row = mysqli_fetch_assoc($result)) {?>
                        <div class="album-item col-md-4 filtr-item" data-category="4">
                            <a href="#"    >
                                <div class="album-item__overlay">
                                    <span class="album-item__cover"></span>
                                    <h5><?=$row['cname']?></h5>
                                </div>
                                <div class="album-item__img">
                                    <img src="../admin/Dashboard/pages/examples/clientImages/<?= $row['cimage'] ?>"
                                        alt="" srcset="">
                                </div>
                            </a>
                        </div>
                        <?php }}?>
                        <!-- Album item -->
                         <!-- Album item -->
                         <?php 
                            $sql = "select * from add_client where cname like 'o%'";
                            $result = mysqli_query($link,$sql);

                            if (mysqli_num_rows($result)  > 0) {
                            
                        ?>
                        
                        <?php while($row = mysqli_fetch_assoc($result)) {?>
                        <div class="album-item col-md-4 filtr-item" data-category="4">
                            <a href="#"    >
                                <div class="album-item__overlay">
                                    <span class="album-item__cover"></span>
                                    <h5><?=$row['cname']?></h5>
                                </div>
                                <div class="album-item__img">
                                    <img src="../admin/Dashboard/pages/examples/clientImages/<?= $row['cimage'] ?>"
                                        alt="" srcset="">
                                </div>
                            </a>
                        </div>
                        <?php }}?>
                        <!-- Album item -->
                         <!-- Album item -->
                         <?php 
                            $sql = "select * from add_client where cname like 'p%'";
                            $result = mysqli_query($link,$sql);

                            if (mysqli_num_rows($result)  > 0) {
                            
                        ?>
                        
                        <?php while($row = mysqli_fetch_assoc($result)) {?>
                        <div class="album-item col-md-4 filtr-item" data-category="5">
                            <a href="#"    >
                                <div class="album-item__overlay">
                                    <span class="album-item__cover"></span>
                                    <h5><?=$row['cname']?></h5>
                                </div>
                                <div class="album-item__img">
                                    <img src="../admin/Dashboard/pages/examples/clientImages/<?= $row['cimage'] ?>"
                                        alt="" srcset="">
                                </div>
                            </a>
                        </div>
                        <?php }}?>
                        <!-- Album item -->
                        <!-- Album item -->
                        <?php 
                            $sql = "select * from add_client where cname like 'q%'";
                            $result = mysqli_query($link,$sql);

                            if (mysqli_num_rows($result)  > 0) {
                            
                        ?>
                        
                        <?php while($row = mysqli_fetch_assoc($result)) {?>
                        <div class="album-item col-md-4 filtr-item" data-category="5">
                            <a href="#"    >
                                <div class="album-item__overlay">
                                    <span class="album-item__cover"></span>
                                    <h5><?=$row['cname']?></h5>
                                </div>
                                <div class="album-item__img">
                                    <img src="../admin/Dashboard/pages/examples/clientImages/<?= $row['cimage'] ?>"
                                        alt="" srcset="">
                                </div>
                            </a>
                        </div>
                        <?php }}?>
                        <!-- Album item -->
                        <!-- Album item -->
                        <?php 
                            $sql = "select * from add_client where cname like 'r%'";
                            $result = mysqli_query($link,$sql);

                            if (mysqli_num_rows($result)  > 0) {
                            
                        ?>
                        
                        <?php while($row = mysqli_fetch_assoc($result)) {?>
                        <div class="album-item col-md-4 filtr-item" data-category="5">
                            <a href="#"    >
                                <div class="album-item__overlay">
                                    <span class="album-item__cover"></span>
                                    <h5><?=$row['cname']?></h5>
                                </div>
                                <div class="album-item__img">
                                    <img src="../admin/Dashboard/pages/examples/clientImages/<?= $row['cimage'] ?>"
                                        alt="" srcset="">
                                </div>
                            </a>
                        </div>
                        <?php }}?>
                        <!-- Album item -->
                        <!-- Album item -->
                        <?php 
                            $sql = "select * from add_client where cname like 's%'";
                            $result = mysqli_query($link,$sql);

                            if (mysqli_num_rows($result)  > 0) {
                            
                        ?>
                        
                        <?php while($row = mysqli_fetch_assoc($result)) {?>
                        <div class="album-item col-md-4 filtr-item" data-category="5">
                            <a href="#"    >
                                <div class="album-item__overlay">
                                    <span class="album-item__cover"></span>
                                    <h5><?=$row['cname']?></h5>
                                </div>
                                <div class="album-item__img">
                                    <img src="../admin/Dashboard/pages/examples/clientImages/<?= $row['cimage'] ?>"
                                        alt="" srcset="">
                                </div>
                            </a>
                        </div>
                        <?php }}?>
                        <!-- Album item -->
                        <!-- Album item -->
                        <?php 
                            $sql = "select * from add_client where cname like 't%'";
                            $result = mysqli_query($link,$sql);

                            if (mysqli_num_rows($result)  > 0) {
                            
                        ?>
                        
                        <?php while($row = mysqli_fetch_assoc($result)) {?>
                        <div class="album-item col-md-4 filtr-item" data-category="5">
                            <a href="#"    >
                                <div class="album-item__overlay">
                                    <span class="album-item__cover"></span>
                                    <h5><?=$row['cname']?></h5>
                                </div>
                                <div class="album-item__img">
                                    <img src="../admin/Dashboard/pages/examples/clientImages/<?= $row['cimage'] ?>"
                                        alt="" srcset="">
                                </div>
                            </a>
                        </div>
                        <?php }}?>
                        <!-- Album item -->
                        <!-- Album item -->
                        <?php 
                            $sql = "select * from add_client where cname like 'u%'";
                            $result = mysqli_query($link,$sql);

                            if (mysqli_num_rows($result)  > 0) {
                            
                        ?>
                        
                        <?php while($row = mysqli_fetch_assoc($result)) {?>
                        <div class="album-item col-md-4 filtr-item" data-category="6">
                            <a href="#"    >
                                <div class="album-item__overlay">
                                    <span class="album-item__cover"></span>
                                    <h5><?=$row['cname']?></h5>
                                </div>
                                <div class="album-item__img">
                                    <img src="../admin/Dashboard/pages/examples/clientImages/<?= $row['cimage'] ?>"
                                        alt="" srcset="">
                                </div>
                            </a>
                        </div>
                        <?php }}?>
                        <!-- Album item -->
                        <!-- Album item -->
                        <?php 
                            $sql = "select * from add_client where cname like 'v%'";
                            $result = mysqli_query($link,$sql);

                            if (mysqli_num_rows($result)  > 0) {
                            
                        ?>
                        
                        <?php while($row = mysqli_fetch_assoc($result)) {?>
                        <div class="album-item col-md-4 filtr-item" data-category="6">
                            <a href="#"    >
                                <div class="album-item__overlay">
                                    <span class="album-item__cover"></span>
                                    <h5><?=$row['cname']?></h5>
                                </div>
                                <div class="album-item__img">
                                    <img src="../admin/Dashboard/pages/examples/clientImages/<?= $row['cimage'] ?>"
                                        alt="" srcset="">
                                </div>
                            </a>
                        </div>
                        <?php }}?>
                        <!-- Album item -->
                        <!-- Album item -->
                        <?php 
                            $sql = "select * from add_client where cname like 'w%'";
                            $result = mysqli_query($link,$sql);

                            if (mysqli_num_rows($result)  > 0) {
                            
                        ?>
                        
                        <?php while($row = mysqli_fetch_assoc($result)) {?>
                        <div class="album-item col-md-4 filtr-item" data-category="6">
                            <a href="#"    >
                                <div class="album-item__overlay">
                                    <span class="album-item__cover"></span>
                                    <h5><?=$row['cname']?></h5>
                                </div>
                                <div class="album-item__img">
                                    <img src="../admin/Dashboard/pages/examples/clientImages/<?= $row['cimage'] ?>"
                                        alt="" srcset="">
                                </div>
                            </a>
                        </div>
                        <?php }}?>
                        <!-- Album item -->
                        <!-- Album item -->
                        <?php 
                            $sql = "select * from add_client where cname like 'x%'";
                            $result = mysqli_query($link,$sql);

                            if (mysqli_num_rows($result)  > 0) {
                            
                        ?>
                        
                        <?php while($row = mysqli_fetch_assoc($result)) {?>
                        <div class="album-item col-md-4 filtr-item" data-category="6">
                            <a href="#"    >
                                <div class="album-item__overlay">
                                    <span class="album-item__cover"></span>
                                    <h5><?=$row['cname']?></h5>
                                </div>
                                <div class="album-item__img">
                                    <img src="../admin/Dashboard/pages/examples/clientImages/<?= $row['cimage'] ?>"
                                        alt="" srcset="">
                                </div>
                            </a>
                        </div>
                        <?php }}?>
                        <!-- Album item -->
                        <!-- Album item -->
                        <?php 
                            $sql = "select * from add_client where cname like 'y%'";
                            $result = mysqli_query($link,$sql);

                            if (mysqli_num_rows($result)  > 0) {
                            
                        ?>
                        
                        <?php while($row = mysqli_fetch_assoc($result)) {?>
                        <div class="album-item col-md-4 filtr-item" data-category="6">
                            <a href="#"    >
                                <div class="album-item__overlay">
                                    <span class="album-item__cover"></span>
                                    <h5><?=$row['cname']?></h5>
                                </div>
                                <div class="album-item__img">
                                    <img src="../admin/Dashboard/pages/examples/clientImages/<?= $row['cimage'] ?>"
                                        alt="" srcset="">
                                </div>
                            </a>
                        </div>
                        <?php }}?>
                        <!-- Album item -->
                        <!-- Album item -->
                        <?php 
                            $sql = "select * from add_client where cname like 'z%'";
                            $result = mysqli_query($link,$sql);

                            if (mysqli_num_rows($result)  > 0) {
                            
                        ?>
                        
                        <?php while($row = mysqli_fetch_assoc($result)) {?>
                        <div class="album-item col-md-4 filtr-item" data-category="6">
                            <a href="#"    >
                                <div class="album-item__overlay">
                                    <span class="album-item__cover"></span>
                                    <h5><?=$row['cname']?></h5>
                                </div>
                                <div class="album-item__img">
                                    <img src="../admin/Dashboard/pages/examples/clientImages/<?= $row['cimage'] ?>"
                                        alt="" srcset="">
                                </div>
                            </a>
                        </div>
                        <?php }}?>
                        <!-- Album item -->
                       
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
</body>


</html>