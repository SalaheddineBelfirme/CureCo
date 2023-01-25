<?php require APPROOT . '/views/inc/header.php'; ?>
<?php require APPROOT . '/views/inc/nav.php'; ?>


<div style="background: url(https://bootstrapious.com/i/snippets/sn-static-header/background.jpg)" class="jumbotron bg-cover text-white">
    <div class="container py-5 text-center">
        <h1 class="display-4 font-weight-bold">Health Is Wealth</h1>
        <p class="font-italic mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae, iure.</p>
        <p class="font-italic">
            <a href="https://bootstrapious.com" class="text-white">
                <u>View details</u>
            </a>
        </p>
        <a href="<?php echo URLROOT ?>/Pages/dashboard"  style="background-color:#65ff5a" role="button" class="btn btn-success px-5">dashboard</a>
    </div>
</div>




<div class="container">
    <div class="row">
        
<section class="prices">
  <div class="container py-5 bg-light">
    <div class="row d-flex flex-column align-items-center text-center">
      <div class="col-md-6 col-8">
        <div class="text-box text-center">
          <h3>Our new products</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam
            omnis numquam ullam praesentium vitae sed architecto. Rerum
            aspernatur beatae laudantium.
          </p>
        </div>
      </div>

      <div class="col-12 mt-5 px-5">
        <div class="row d-flex justify-content-evenly align-items-center">

        <?php for($i=0;$i<count($data['proudct']);$i++){?>  
            
            <div class="card shadow-lg p-3 mb-5 bg-white rounded" style="width: 22rem">
            <div class="card-body text-start">
              <h4 class="card-title p-3">
                <b>132$</b><sup style="font-size: 17px"> per unit</sup>
              </h4>
              <img src="./public/images/elliot-l-angelier-4pq3qiOIET8-unsplash.jpg" class="card-img-top img-thumbnail"
                alt="..." />
              <h4 class="card-title py-3"><b>Gestoine</b></h4>
              <p class="card-text">
                Some quick example text to build on the card title and make
                up the bulk of the card's content.
              </p>
              <p>
                <a href="" class="card-text text-muted" style="text-decoration: none">View Details</a>
              </p>
            </div>
          </div>
       <?php }  ?>
         
 
        </div>
      </div>
      <a href="#" id="btn" class="text-decoration-none text-white border p-2 rounded-4"
        style="background-color: hsl(12, 88%, 59%); width: 150px">See more</a>
    </div>
  </div>
</section>

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
 
