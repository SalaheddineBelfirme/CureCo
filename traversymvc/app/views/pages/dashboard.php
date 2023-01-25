<?php require APPROOT . '/views/inc/header.php';
// require  APPROOT . '/controllers/Croisiere.php ';



?>
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">

<?php require APPROOT . '/views/inc/nav.php'; ?>
<div id="container_crosi" style="margin-top: 8%;" class="container-fluid p-0 ">


    <div style=" margin: 0px;padding: 0px;" class="row">

        <div style="margin: 0px;padding: 0px;display: flex;justify-content: center;" class="">
            <div style="margin: 0 0px;padding: 0px;width: 90%;" class="">

                <div class="row">

                    <form  action="<?php echo URLROOT ?>/product/recherchproudct/ " class="" method="post" role="search">
                        <input class=" " name="serch" type="search" placeholder="Search" aria-label="Search">
                        <button name="subserch"  class="btn btn-outline-success " type="submit">Search</button>
                    </form>
                    <form action="<?php echo URLROOT ?>/Pages/statistique" method="post">
                    <button type="submit" class="btn btn-success">statstic</button>
                    </form>
                  

                </div>

                <div class="row">
                    <div style="padding: 0px !important;" class="col mb-5">
                        <div class="card">
                            <div class="card-body bg-light" style="overflow: auto;">
                                <a data-bs-toggle="modal" data-bs-target="#cr" data-bs-whatever="@mdo">
                                    <i class="fas fa-plus">add proudct</i>
                                </a>

                                <table id="tdataa" style="" class="table table-hover  container">
                                    <thead>
                                        <tr>
                                            <td scope="col">Name</td>
                                            <td style="width:100px" scope="col">
                                                <div>date</div>
                                                <div style="display: flex;gap: 4px;"><span class="decord">[</span> <span class="order"><a href="<?= URLROOT ?>/product/trie/date_dajout/ASC">A</a></span> <span class="decord">|</span> <span class="order"><a href="<?= URLROOT ?>/product/trie/date_dajout/DESC">D</a></span> <span class="decord">]</span></div>
                                            </td>
                                            <td scope="col">libelle</td>
                                            <td style="width:100px" scope="col">
                                                <div>Prix</div>
                                                <div style="display: flex;gap: 4px;"><span class="decord">[</span> <span class="order"><a href="<?= URLROOT ?>/product/trie/prix/ASC">A</a></span> <span class="decord">|</span> <span class="order"><a href="<?= URLROOT ?>/product/trie/prix/DESC">D</a></span> <span class="decord">]</span></div>
                                            </td>
                                            <td scope="col">category</td>
                                            <td scope="col">image</td>
                                            <td scope="col">Action</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 0;
                                        foreach ($data['product'] as $pr) { ?>
                                            <tr>
                                                <td scope="row"><?php echo $pr->name ?></td>
                                                <td scope="row"><?php echo $pr->date_dajout ?></td>
                                                <td scope="row"> <?php echo $pr->libelle ?></td>
                                                <td scope="row"><?php echo $pr->prix ?>$</td>
                                                <td scope="row"><?php echo $pr->name_categorie ?>$</td>
                                                <td scope="row"> <img style="width: 78px ;height: 78px;" id="imgp" src="<?= URLROOT ?>/imgg/<?php echo $pr->image ?>" alt=""></td>
                                                <td scope="row" style=" height: 100px; " class="d-flex align-items-center ">

                                                    <form action="<?php echo URLROOT ?>/product/deleteproudct/<?php echo $pr->id_prodct  ?>" method="post">

                                                        <button style="margin-left:10px" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                                    </form>


                                                    <a id="updateprodact" style="margin-left: 10px;" class="btn btn-success" onclick="editProduct(<?php echo $pr->id_prodct ?>)" data-bs-toggle="modal" data-bs-target="#crupdate" data-bs-whatever="@mdo"><i class="fa fa-edit"></i></a>



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
                    <div style="margin-top: 8%; padding: 0px !important;" class="col mb-5">
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
        </div>
    </div>







</div>









<div class="modal fade" id="cr" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Product 1</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form id="FormAdd" action="<?php echo URLROOT ?>/product/addprudct" class="d-flex flex-column gap-3" enctype="multipart/form-data" method="POST">
                    <input id="nbprodct" type="text" value="1">
                    <input name="name[]" type="text" class="form-control name"  placeholder="name" aria-label="Username" aria-Dribedby="basic-addon1" >
                    <input name="libelle[]" type="text" class="form-control libelle" placeholder="libelle" aria-label="Username" aria-Dribedby="basic-addon1">
                    <input name="prix[]" type="text" class="form-control prix" placeholder="prix" aria-label="Recipient's username" aria-Dribedby="basic-addon2" >
                    <input accept=".jpg,jpeg,.png" name="imageadd[]" type="file" class="form-contro imageaddl" >
                    <select name="category[]" class="form-select category" aria-label="Default select example" >
                        <option value="0" selected>Categorie </option>
                        <?php foreach ($data['categorie'] as $row) { ?>
                            <option value="<?php echo $row->id_c ?>"><?php echo $row->name_categorie ?></option>
                        <?php } ?>
                    </select>

                    <div id="modleadd">

                    </div>


                    <div class="modal-footer">
                        <button type="button" onclick="AddNewProdct()" class="btn btn-secondary">Add More</button>

                        <button id="btnSubAdd" class="btn bg-primary text-light  " onclick="Save(event)" name="submitadd" type="submit">Submit</button>

                    </div>
                </form>
            </div>

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
                <form id="formupdate" action="<?php echo URLROOT ?>/product/aupdteproduct" class="d-flex flex-column gap-3" enctype="multipart/form-data" method="POST">
                    <input type="hidden" name="id" id="id">
                    <input id="namep" name="name" type="text" class="form-control" placeholder="name" aria-label="Username" aria-Dribedby="basic-addon1" >
                    <span id="namepER"></span>
                    <input id="libellep" name="libelle" type="text" class="form-control" placeholder="libelle" aria-label="Username" aria-Dribedby="basic-addon1" >
                    <span id="libellepER"></span>
                    <input id="prixp" name="prix" type="text" class="form-control" placeholder="prix" aria-label="Recipient's username" aria-Dribedby="basic-addon2" >
                    <span id="prixpER"></span>
                    <input accept=".jpg,jpeg,.png" name="imageadd" type="file" class="form-control">
                    <select id="catgoryp" name="category" class="form-select" aria-label="Default select example" >
                        <option value="0" selected>Categorie </option>
                        <?php foreach ($data['categorie'] as $row) { ?>
                            <option value="<?php echo $row->id_c ?>"><?php echo $row->name_categorie ?></option>
                        <?php } ?>
                    </select>
                    <span id="catgorypER"></span>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button id="btnSubAdd" class="btn bg-primary text-light  " onclick="validateupdate(event)" name="submitupdate" type="submit">Submit</button>

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
        libelle = document.getElementById("libellep")
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
                libelle.value = data.libelle
                prix.value = data.prix
                categorie.value = data.id_category
                id_product.value = id
            }
        })
    }
</script>



<div class="modal fade" id="port" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">



    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">New Categorie</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">


                <form method="POST" action="<?php echo URLROOT ?>/categorie/add_categorie" style="width: 50%; margin: auto; margin-top: 10%;" class="was-validated">

                    <div class="mb-3">
                        <input type="text" placeholder="Name Categorie" name="namecategorie" class="form-control" aria-label="file example" required>
                    </div>
                 
                    <div class="mb-3">
                        <button type="submit" name="sub_addport" class="btn btn-primary" required> ajoute Categorie</button>
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