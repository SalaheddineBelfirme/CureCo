

// const menubtn = document.querySelector("#menu-btn");
// const navbar = document.querySelector(".header .navbar");


function AddNewProdct(){
 


 let  modle=document.getElementById("modleadd")
 let  NbProudct=document.getElementById("nbprodct")
//  console.log(NbProudct);


let nb=parseInt(NbProudct.value) +1

NbProudct.value=nb;
 modle.insertAdjacentHTML('afterend', `<h1 class="modal-title fs-5" id="exampleModalLabel  "> Product`+nb+` </h1>
   <input name="name`+nb+`" type="text" class="form-control" placeholder="name`+nb+`" aria-label="Username"
              aria-describedby="basic-addon1" required>
          <input name="libelle" type="text" class="form-control" placeholder="libelle" aria-label="Username"
              aria-describedby="basic-addon1">
          <input name="prix`+nb+`" type="text" class="form-control" placeholder="prix`+nb+`"
              aria-label="Recipient's username" aria-describedby="basic-addon2" required>
          <input accept=".jpg,jpeg,.png" name="imageadd`+nb+`" type="file" class="form-control" required>
          <select name="category`+nb+`" class="form-select" aria-label="Default select example" required>
              <option selected>Categorie </option>
              <?php foreach ($data['categorie'] as $row) { ?>
              <option value="<?php echo $row->id_c ?>"><?php echo $row->name_categorie ?></option>
              <?php } ?>
          </select>`);


 }

function validateEmail(email) {
    let res =/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/;
    if(res.test(email)){
        console.log("email valid")
    }
    else{
        console.log("email invalid")
    }
    return res.test(email)
    }

    function validatePassword(password) {
        let res = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;
     
           
        
        return res.test(password)
        }

        function validatetext(number) {
            let res =  /[-+]?[0-9]*\.?[0-9]+/;
            return res.test(number)
            }

 

    function validate(event) {
        let form = $("#formlogin");
        let erremail = $("#emailER");
        let errpassword = $("#paswordER");
        let email = $("#emaillog").val();
        let password = $("#paswordlog").val();
        event.preventDefault();
        console.log()
        let bol=true;

        erremail.text("");
        if(validateEmail(email)) {
          erremail.text(email + " is valid");
          erremail.css("color", "blue");
        } else {
          erremail.text(email + " is not valid");
          erremail.css("color", "red");
          bol=false;
        }

        errpassword.text("");
        if(validatePassword(password)) {
          errpassword.text(password + " is valid");
          errpassword.css("color", "blue");
          
        } else {
          errpassword.text(password + " is not valid");
          errpassword.css("color", "red");
          bol=false;
        }
        if(bol){
            form.submit();
        }
        

        return false;
      }
    
  function validateupdate(event){   
    let form=document.getElementById("namep")
    let name=document.getElementById("namep")
    let nameER=document.getElementById("namepER")
    let category=document.getElementById("catgoryp")
    let catgoryER=document.getElementById("catgorypER")
    let prix=document.getElementById("prixp")
    let prixER=document.getElementById("prixpER")
    
  }

function chekvalidte(){

    
    console.log("letsgo")

}


// document.addEventListener("DOMContentLoaded",()=>{

//   console.log("ggggaaaggggggggg");
// })
