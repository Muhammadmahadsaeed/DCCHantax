
<?php
require_once( '../config.php' );
?>
<!DOCTYPE html>
<html>

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>AIDL - Associated Instruments Distributors ( Pvt ) Limited</title>
    <!-- Metadata -->
    
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <!-- Favicon -->
    <link rel='icon' type='image/png' href='./assets/images/ico/favicon.ico' />
    <!-- CSS Plugins -->
    <link rel='stylesheet' href='./assets/css/plugins.min.css'>
    <!-- Custom CSS File -->
    <link rel='stylesheet' href='./assets/css/style.css'>
    <link rel='stylesheet' href='./ourteam.css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />

</head>

<body>
    <div class='ms-main-container'>
        <!-- Preloader -->
        <div class='ms-preloader'></div>
        <!-- Header -->
        <header class='ms-header'>
            <nav class='ms-nav'>
                <div class='ms-logo'>
                    <a href='../' data-type='page-transition'>
                         <div class="logo-dark "><img src="logo-dark.svg" alt="logo image"></div>
                        <div class="logo-light current"><img src="logo-light.svg" alt="logo image"></div>
                    </a>
                </div>
                <button class='hamburger' type='button' data-toggle='navigation'>
                    <span class='hamburger-box'>
                        <span class='hamburger-label'>menu</span>
                        <span class='hamburger-inner'></span>
                    </span>
                </button>
                <div class='height-full-viewport'>
                    <ul class='ms-navbar'>
                        <!-- Nav Link -->
                        <li class='nav-item'>
                            <a href='../' data-type='page-transition'>
                                <span class='ms-btn'>home</span>

                            </a>
                        </li>
                        <!-- Nav Link -->
                        <!-- Nav Link -->
                        <li class='nav-item'>
                            <a href='./about.php' data-type='page-transition'>
                                <span class='ms-btn'>about us</span>

                            </a>

                        </li>
                        <!-- Nav Link -->
                        <li class='nav-item'>
                            <a href='./ourTeams.php' data-type='page-transition'>
                                <span class='ms-btn'>our team</span>

                            </a>
                        </li>
                        <!-- Nav Link -->
                        <!-- Nav Link -->
                        <li class='nav-item'>
                            <a href='./products.php' data-type='page-transition'>
                                <span class='ms-btn'>product</span>

                            </a>
                        </li>
                        <!-- Nav Link -->
                        <!-- Nav Link -->
                        <li class='nav-item'>
                            <a href='./albums.php' data-type='page-transition'>
                                <span class='ms-btn'>gallery</span>

                            </a>
                        </li>
                        <!-- Nav Link -->
                        <li class='nav-item'>
                            <a href='./contact.php' data-type='page-transition'>
                                <span class='ms-btn'>contact</span>

                            </a>
                        </li>
                        <li class='nav-item'>
                            <a href='./ourClients.php' data-type='page-transition'>
                                <span class='ms-btn'>our clients</span>

                            </a>
                        </li>
                        <li class='nav-item'>
                            <a href='./promotions.php' data-type='page-transition'>
                                <span class='ms-btn'>promotions</span>

                            </a>
                        </li>

                        <!-- Nav Link -->
                        <li class='nav-item'>
                            <a href='./blog.php' data-type='page-transition'>
                                <span class='ms-btn'>blog</span>

                            </a>
                        </li>

                    </ul>
                </div>
            </nav>
        </header>
        <!-- Container -->
        <main class='ms-container'>
            <!-- Page Title -->
            <div class='ms-section__block'>
                <div class='ms-page-title'>
                    <h2 class='page-header'>Our Team</h2>

                </div>
            </div>
            <!-- Page Content -->
            <div class='ms-section__block'>
                <div class='row'>
                    <?php

                        $sql = 'select * from team_members';
                        $result = mysqli_query( $link, $sql );
                        if ( mysqli_num_rows( $result ) ) {
                            while( $row = mysqli_fetch_assoc( $result ) ) {

                    ?>
                    <div class='col-md-3 col-sm-4'>

                        <div class='our-team'>
                            <div class='picture'>
                                <img class='img-fluid'
                                    src="../admin/Dashboard/pages/examples/teamImages/<?=$row['team_image'] ?>">
                            </div>
                            <div class='team-content' style='height: 132px;'>
                                <p class='name1'><?php echo strtoupper( $row['team_name'] ) ?></p>
                                <p class='title'><b><?php echo strtoupper( $row['team_post'] ) ?></b></p>
                                <p class='title'><?php echo $row['team_email'] ?></p>
                                <p class='title'><?php echo $row['team_num'] ?></p>
                                
                                <?php if(strtolower($row['team_name']) == 'sohail tayyab' || strtolower($row['team_name']) == 'hussain ceen tayyab'){
                                                   
                                                
                                ?>
                                     <div class='read_more' data-title='Read More'  
                                            style="color:red;border: 2px solid;font-weight: bold;" id="<?php $chk=$row['team_id']==1?custId1:custId2;
                                            echo $chk;?>"
                                            data-toggle="modal" data-id="<?php echo $row['team_id'] ?>"
                                            data-target="#myModal">
                                            
                                            Read More
                                    </div>
                                                    
                                <?php } ?>
                                
                                
                               

                               
                            </div>

                        </div>
                    </div>
                    <?php }
        }?>
                </div>
            </div>
            <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog" style="width:40%;border-radius: 5px;" role="document">
                    <div class="modal-content">

                        <div class="modal-body" style="background-color: rgba(0, 0, 0, 0.8);">
                            <div class="fetched-data"></div>
                        </div>

                    </div>
                </div>
            </div>
           
        </main>

        <!-- Footer -->
        <!--<footer>-->
        <!--    <div class='ms-footer'>-->
        <!--        <div class='copyright'> Developed by <a href='http://softwarechimps.com/'-->
        <!--                target='_blank'>Softwarechimps.com</a></div>-->

        <!--    </div>-->
        <!--</footer>-->




    </div>

    <!-- JS Libraries -->
    <!-- jquery-2.1.3.min js -->
    <script type='text/javascript' src='./assets/js/jquery-3.2.1.min.js'></script>
    <!-- Vendors -->
    <script type='text/javascript' src='./assets/js/plugins.min.js'></script>
    <!-- Main js -->
    <script type='text/javascript' src='./assets/js/main.js'></script>
    <!-- jQuery Modal -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
    

</body>
<script>

$(document).ready(function() {
$('#custId1').click(function(e) {

  var rowid = $(this).data('id');
  
        console.log(rowid)
  $.ajax({
            type: 'get',
            url: './fetechTeamMemberRecord.php', //Here you will fetch records 
            data: 'rowid=' + rowid, //Pass $id
            success: function(data) {
                console.log(data)
                $('.fetched-data').html(data).modal(); //Show fetched data from database
            }
        });

  });
});

$(document).ready(function() {
$('#custId2').click(function(e) {

 
 
  var rowid = $(this).data('id');
  
        console.log(rowid)
  $.ajax({
            type: 'get',
            url: './fetechTeamMemberRecord.php', //Here you will fetch records 
            data: 'rowid=' + rowid, //Pass $id
            success: function(data) {
                console.log(data)
                $('.fetched-data').html(data).modal(); //Show fetched data from database
            }
        });

  });
});
</script>

</html>