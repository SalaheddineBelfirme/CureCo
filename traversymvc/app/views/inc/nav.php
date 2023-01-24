<?php 

require_once '../app/controllers/Pages.php';

// require_once 'libraries/Controller.php';


?>
<nav style="position: unset;" class="navbar navbar-expand-lg bg-dark navbar-light  px-4 px-lg-5 " >
            <a href="" class="navbar-brand p-0">
                <!-- <h1 class="text-primary m-0"><i class="fa fa-map-marker-alt me-3"></i>Tourist</h1> -->
                <img src=" <?php echo URLROOT?>/public/imgg/logo-removebg-preview.png" alt="Logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a style="color:#65ff5a"  href="<?=URLROOT ?>/pages/home" class="nav-item text-success nav-link ">Home</a>
                    <a style="display:<?php echo Pages::test();?>" href="<?=URLROOT ?>/pages/dashboard" class="nav-item text-success nav-link">dashboard</a>
                </div>
                    <!-- <a href="contact"   class="nav-item text-success nav-link ">Contact</a> -->
                </div>
                <a href="<?php echo Pages::testlog();?>" style="background-color:#65ff5a" class="btn btn-success rounded-pill py-2 px-4 "><?php echo Pages::testlog();?></a>
            </div>
        </nav>