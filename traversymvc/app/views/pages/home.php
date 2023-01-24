<?php require APPROOT . '/views/inc/header.php'; ?>
<?php require APPROOT . '/views/inc/nav.php'; ?>


<div style="background: url(https://bootstrapious.com/i/snippets/sn-static-header/background.jpg)" class="jumbotron bg-cover text-white">
    <div class="container py-5 text-center">
        <h1 class="display-4 font-weight-bold">Bootstrap static header</h1>
        <p class="font-italic mb-0">Using simple jumbotron-style component, create a nice Bootstrap 4 header with a background image.</p>
        <p class="font-italic">Snippe by
            <a href="https://bootstrapious.com" class="text-white">
                <u>Bootstrapious</u>
            </a>
        </p>
        <a href="<?php echo URLROOT ?>/Pages/dashboard"  style="background-color:#65ff5a" role="button" class="btn btn-success px-5">dashboard</a>
    </div>
</div>

<!-- For Demo Purpose -->
<div class="container py-5">
    <h2 class="h3 font-weight-bold">Some demo content</h2>
    <div class="row">
        <div class="col-lg-10 mb-4">
            <p class="font-italic text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor.</p>
            <p class="font-italic text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor.</p>
        </div>
        <div class="col-lg-8">
            <p class="font-italic text-muted">Lorem ipsum dolor sit amet, consectetur <strong class="font-weight-bold text-dark">adipisicing elit, sed </strong>do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in <strong class="font-weight-bold text-dark">reprehenderit in voluptate </strong>velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-3 col-sm-6">
            <div class="counter">
                <div class="counter-icon">
                    <i class="fa fa-globe"></i>
                </div>
                <h3>Web Designing</h3>
                <span class="counter-value">945</span>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="counter">
                <div class="counter-icon">
                    <i class="fa fa-globe"></i>
                </div>
                <h3>Web Designing</h3>
                <span class="counter-value">945</span>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="counter">
                <div class="counter-icon">
                    <i class="fa fa-globe"></i>
                </div>
                <h3>Web Designing</h3>
                <span class="counter-value">945</span>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="counter blue">
                <div class="counter-icon">
                    <i class="fa fa-rocket"></i>
                </div>
                <h3>Web Development</h3>
                <span class="counter-value">893</span>
            </div>
        </div>
    </div>
</div>


<div class="container shadow bg-light w-75 pt-0"> 
       
       <div  class="row text-center mt-5">
           <h6 id="h1contact" class="bg-white text-center text-primary px-3">CONTACT US</h6>
         
       </div>
       <div class="row d-md-flex justify-content-between align-items-start  ">
           <div id="gpinfo" class="col-md-6 pt-0">
               <div class="mb-3">
                   <label for="" class="form-lable">First Name</label>
                   <input class="form-control" type="text">
               </div>
               <div class="mb-3">
                   <label for="" class="form-lable"> Last Name</label>
                   <input class="form-control" type="text">
               </div>
               <div class="mb-3">
                   <label for="" class="form-lable">tele</label>
                   <input class="form-control" type="enail">
               </div>
               <div class="mb-3">
                   <label for="" class="form-lable">Email</label>
                   <input class="form-control" type="enail">
               </div>
               <div class="">
                   <label for="" class="form-lable">Message</label>
                   <textarea class="form-control"  ></textarea>
               </div>
              
           </div>
           <div id="slide" class="col-md-6">
               <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                   <div class="carousel-inner">
                     <div class="carousel-item active">
                       <img src="<?php echo URLROOT ?>/public/imgg/Contact us-amico.png" class="d-block w-100" alt="...">
                     </div>
                     <div class="carousel-item">
                       <img src="<?php echo URLROOT ?>/public/imgg/Contact us-bro.png" class="d-block w-100" alt="...">
                     </div>
                     <div class="carousel-item">
                       <img src="<?php echo URLROOT ?>/public/imgg/Contact us-pana.png" class="d-block w-100" alt="...">
                     </div>
                   </div>
                   <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                     <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                     <span class="visually-hidden">Previous</span>
                   </button>
                   <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                     <span class="carousel-control-next-icon" aria-hidden="true"></span>
                     <span class="visually-hidden">Next</span>
                   </button>
                 </div>
           </div>
       </div>
       <div class="col  text-center "> 
           <button class="btn btn-primary  mb-3 ">Send</button>
       </div>
       
   </div>




<?php require APPROOT . '/views/inc/footer.php'; ?>
 
