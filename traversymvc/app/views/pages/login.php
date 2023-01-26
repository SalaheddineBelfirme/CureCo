<?php require APPROOT . '/views/inc/header.php'; ?>
<?php require APPROOT . '/views/inc/nav.php'; ?>
    <div class="container-fluid mt-5 vh-100">
      
        <div class="row d-md-flex justify-content-between mt-5  align-items-start">
            <div id="slide" class="col-md-6">
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="<?php echo URLROOT ?>/public/imgg/lrb.png" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="<?php echo URLROOT ?>/public/imgg/logrb.png" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="<?php echo URLROOT ?>/public/imgg/logrb1.png" class="d-block w-100" alt="...">
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
            <div class="col-md-6">
                <form method="post"  id="formlogin" action="<?php echo URLROOT ?>/login/loginn/">
                        <div class="row d-flex justify-content-center align-items-center">
                            <img  id="imge_logi" class="w-25 d-flex-column justify-content-center " src="./imgg/logo-removebg-preview.png" alt="" >
                    
                            <h4  style="color:#65ff5a ; "  class="  text-center  px-3">Hello agine</h4>
                            <p style="font-size: small  w-75 ;" class="text-muted text-center ">Lorem ipsum dolor sit amet consectetur
                                adipisicing elit. Culpa, nihil quae maiores, iste nostrum laboriosam voluptas totam quis</p>

                            <div class="mb-3">
                                <input placeholder="Email" id="emaillog"  name="email"  class="form-control w-75 m-auto mb-3 " type="email">
                                <div id='emailER'></div>
                            </div>
                            <div class="mb-3">
                                <input placeholder="Password" id="paswordlog"  name="pass" required class="form-control  w-75 m-auto  mb-3" type="password">
                                <span id='paswordER'></span>
                            </div>
                    
                            <button  style="background-color:#65ff5a" type="submit" name="log" class="form-control btn btn-primary w-75 mb-4 "  onclick="validate(event)" >Submit</button>
                     
                        </div>

                        <p style="font-size: small   w-75;" class="text-muted text-center ">Lorem ipsum dolor sit amet consectetur jhsjhsskms
                            adipisicing elit. Culpa, nihil quae maiores, iste nostrum 
                  
                </form>

            </div>
         
        </div>
    </div>

</body>

</html>