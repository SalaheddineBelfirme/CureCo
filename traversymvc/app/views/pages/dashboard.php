<?php require APPROOT . '/views/inc/header.php';
// require  APPROOT . '/controllers/Croisiere.php ';



?>
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">


<div id="container_crosi" class="container-fluid position-relative p-0  ">
  <?php require APPROOT . '/views/inc/nav.php'; ?>
  <div class="row">
    <div style="margin-top: 8%;" class="col mb-5">
      <div class="card">
        <div class="card-body bg-light" style="overflow: auto;">
          <a data-bs-toggle="modal" data-bs-target="#cr" data-bs-whatever="@mdo">
            <i onclick="validchmps()" class="fas fa-plus">add proudct</i>
          </a>

          <table id="tdata" style="width: 90%;" class="table table-hover  container">
            <thead>
              <tr>
                <td scope="col">Name</td>
                <td scope="col">Prix</td>
                <td scope="col">Name category</td>
                <td scope="col">image</td>
                <td scope="col">Action</td>
              </tr>
            </thead>
            <tbody>
              <?php $i = 0;
              foreach ($data['product'] as $pr) { ?>
                <tr>
                  <td scope="row"><?php echo $pr->name ?></td>
                  <td scope="row"><?php echo $pr->prix ?>$</td>
                  <td scope="row"><?php echo $pr->name_categorie ?>$</td>
                  <td scope="row"> <img style="width: 100px ;height: 100px;" id="imgp" src="../public/imgg/<?php echo $pr->image ?>" alt=""></td>
                  <td scope="row" style=" height: 100px; " class="d-flex align-items-center ">

                    <form action="<?php echo URLROOT ?>/product/deleteproudct/<?php echo $pr->id_prodct  ?>" method="post">

                      <button style="margin-left:10px" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                    </form>


                    <a id="updateprodact"  style="margin-left: 10px;" class="btn btn-success" onclick="editProduct(<?php echo $pr->id_prodct ?>)" data-bs-toggle="modal" data-bs-target="#crupdate" data-bs-whatever="@mdo"><i class="fa fa-edit"></i></a>



                  </td>
                </tr>
              <?php } ?>
            </tbody>
          </table>
          <!-- ----------------------------------------------------- -->

          <!-- -------------------------------------------- -->

        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div style="margin-top: 8%;" class="col mb-5">
      <div class="card">
        <div class="card-body bg-light" style="overflow: auto;">
          <a data-bs-toggle="modal" data-bs-target="#port" data-bs-whatever="@mdo">
            <i class="fas fa-plus"></i>
            <h5>add categorie</h5>
          </a>
          <table id="tdata" class="table table-hover ">
            <thead>
              <tr>
                <td scope="col">Name</td>
                <td scope="col">Action</td>


              </tr>
            </thead>
            <tbody>
              <?php $i = 0;
              foreach ($data['categorie'] as $categorie) { ?>
                <tr>
                  <td scope="row"><?php echo $categorie->name_categorie ?></td>

                  <td scope="row" style=" height: 100px; " class="d-flex align-items-center ">

                    <form action="<?php echo URLROOT ?>/categorie/deletecategorie/<?php echo $categorie->id_c ?>" method="post">
                      <button style="margin-left: 10px;" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                    </form>
                    <form action="<?php echo URLROOT ?>/categorie/updatecategorie/<?php echo $categorie->id_c ?>" method="post">
                      <button id="updatecate" style="margin-left: 10px;" class="btn btn-success"><i class="fa fa-edit"></i></button>
                    </form>
                  </td>
                </tr>
              <?php } ?>
            </tbody>
          </table>
          <!-- ----------------------------------------------------- -->

          <!-- -------------------------------------------- -->

        </div>
      </div>
    </div>
  </div>


</div>









<div class="modal fade" id="cr" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">New croisiere</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?php echo URLROOT ?>/product/addprudct" class="d-flex flex-column gap-3" enctype="multipart/form-data" method="POST">
          <input  name="name" type="text" class="form-control" placeholder="name" aria-label="Username" aria-describedby="basic-addon1" required>
          <input  name="prix" type="text" class="form-control" placeholder="prix" aria-label="Recipient's username" aria-describedby="basic-addon2" required>
          <input accept=".jpg,jpeg,.png" name="imageadd" type="file" class="form-control" required>
          <select  name="category" class="form-select" aria-label="Default select example" required>
            <option selected>Categorie </option>
            <?php foreach ($data['categorie'] as $row) { ?>
              <option value="<?php echo $row->id_c ?>"><?php echo $row->name_categorie ?></option>
            <?php } ?>
          </select>





      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

        <button id="btnSubAdd" class="btn bg-primary text-light  " name="submitadd" type="submit">Submit</button>

      </div>
      </form>
    </div>
  </div>
</div>

</div>

<div class="modal fade" id="crupdate" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Proudct</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form  id="formupdate" action="<?php echo URLROOT ?>/product/aupdteproduct" class="d-flex flex-column gap-3" enctype="multipart/form-data" method="POST">
        <input type="hidden" name="id" id="id">
          <input id="namep"  name="name" type="text" class="form-control" placeholder="name" aria-label="Username" aria-describedby="basic-addon1" required>
          <span id="namepER"></span>
          <input id="prixp" name="prix" type="text" class="form-control" placeholder="prix" aria-label="Recipient's username" aria-describedby="basic-addon2" required>
          <span id="prixpER"></span>
          <input accept=".jpg,jpeg,.png" name="imageadd" type="file" class="form-control" >
          <select id="catgoryp" name="category" class="form-select" aria-label="Default select example" required>
            <option selected>Categorie </option>
            <?php foreach ($data['categorie'] as $row) { ?>
              <option value="<?php echo $row->id_c ?>"><?php echo $row->name_categorie ?></option>
            <?php } ?>
          </select>
          <span id="catgorypER"></span>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

        <button id="btnSubAdd" class="btn bg-primary text-light  " onclick="chekvalidte()" name="submitupdate" type="submit">Submit</button>

      </div>
      </form>
    </div>
  </div>
</div>

</div>




<script>
  function editProduct(id) {
    id_product = document.getElementById("id")
    Name = document.getElementById("namep")
    prix = document.getElementById("prixp")
    categorie = document.getElementById("catgoryp")
    image = document.getElementById("imagep")
    $.ajax({
      type: "POST",
      url: "<?= URLROOT . '/product/getoneproudct/'  ?>" + id,
      data: "{empid: empid}",
      dataType: "json",
      success: function(result) {
     const data = result[0];
        Name.value = data.name
        prix.value = data.prix
        categorie.value = data.id_category 
        id_product.value=id
      }
    })
  }
</script>



<div class="modal fade" id="port" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">



  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">New port</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">


        <form method="POST" action="<?php echo URLROOT ?>/categorie/add_categorie" style="width: 50%; margin: auto; margin-top: 10%;" class="was-validated">

          <div class="mb-3">
            <input type="text" placeholder="Name" name="namecategorie" class="form-control" aria-label="file example" required>
          </div>
          <div class="mb-3">
            <input type="text" placeholder="point_depart" name="pays" class="form-control" aria-label="file example" required>
          </div>

          <div class="mb-3">
            <button type="submit" name="sub_addport" class="btn btn-primary" required> ajoute port</button>
          </div>
        </form>


      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>

  <script>
    $(document).ready(function() {
      $('#tdata').DataTable();
    });
  </script>