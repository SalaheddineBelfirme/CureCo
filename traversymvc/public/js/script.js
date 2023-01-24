

// const menubtn = document.querySelector("#menu-btn");
// const navbar = document.querySelector(".header .navbar");

function vide(){
  let  modle=document.getElementById("modleadd")
  modle.innerHTML = "";
}

function AddNewProdct(){
 let  modle=document.getElementById("modleadd")
 let  NbProudct=document.getElementById("nbprodct")


let nb=parseInt(NbProudct.value) +1
$.ajax({
  type: "GET",
  url: "http://localhost/CureCoj/traversymvc/categorie/getcategorie/",   
  dataType: "json",
  
  success: function(result) {
 
    localStorage.setItem("data", JSON.stringify(result));
      
   },
  error : function(result) {
   
  
    console.log("erure");

 }
 
  
})
a=JSON.parse(localStorage.getItem("data"));
var inputs=`<h1 class="modal-title fs-5" id="exampleModalLabel  "> Product`+nb+` </h1>
<input name="name[]" type="text" class="form-control" placeholder="name`+nb+`" aria-label="Username"
           aria-describedby="basic-addon1" required>
       <input name="libelle[]" type="text" class="form-control" placeholder="libelle" aria-label="Username"
           aria-describedby="basic-addon1">
       <input name="prix[]" type="text" class="form-control" placeholder="prix`+nb+`"
           aria-label="Recipient's username" aria-describedby="basic-addon2" required>
       <input accept=".jpg,jpeg,.png" name="imageadd[]" type="file" class="form-control" required>`

           var select ="<select name='category[]' class='form-select' aria-label='Default select example' required>"
for (let i = 0; i < a.length; i++) {
  var option ="<option value='"+a[i].id_c+"' selected>"+a[i].name_categorie+" </option>"
  select+=option
}
select+='</select>'
inputs+=select;
console.log(inputs)
NbProudct.value=nb;
 modle.insertAdjacentHTML('afterend', inputs);
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

        function validatenuber(number) {
            let res =  /^[-+]?[0-9]*\.?[0-9]+([eE][-+]?[0-9]+)?$/
            console.log(res.test(number))
            return res.test(number)
            }

            function validateText(text) {
             if(text!=''){
              return true
             }
             return false
              }
  

 

    function validate(event) {
        let form = $("#formlogin");
        let erremail = $("#emailER");
        let errpassword = $("#paswordER");
        let email = $("#emaillog").val();
        let password = $("#paswordlog").val();
        event.preventDefault();
  
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
          errpassword.text(  "password  is valid");
          errpassword.css("color", "blue");
          
        } else {
          errpassword.text( " password is not valid");
          errpassword.css("color", "red");
          bol=false;
        }
        if(bol){
            form.submit();
        }
        

        return false;
      }
    
  function validateupdate(event){   
    let formupdate=document.getElementById("formupdate")
    let name=document.getElementById("namep").value
    let nameER=document.getElementById("namepER")
    let category=document.getElementById("catgoryp").value
    let catgoryER=document.getElementById("catgorypER")
    let prix=document.getElementById("prixp").value
    let prixER=document.getElementById("prixpER")

    event.preventDefault();
  
    let bol=true;
    nameER.innerHTML=""
    if(validateText(name)){
      nameER.innerHTML=(name + " is valid");
      nameER.style.color="blue"
    }
    else{
      nameER.innerHTML=(name + " is not valid");
      nameER.style.color="red"
      bol=false;
    }
    if(validateText(category)){
      catgoryER.innerHTML=( " is valid");
      catgoryER.style.color="blue"
    }
    else{
      catgoryER.innerHTML=( " is not valid");
      catgoryER.style.color="red"
      bol=false;
    }
    if(validatenuber(prix)){
      prixER.innerHTML=(prix + " is valid");
      prixER.style.color="blue"
     
    }
    else  {
      prixER.innerHTML=(prix + " is not valid");
      prixER.style.color="red"
      bol=false;

    }
    if(bol){
      formupdate.submit()
    }
    else{
      return false
    }



    
  }




// document.addEventListener("DOMContentLoaded",()=>{

//   console.log("ggggaaaggggggggg");
// })
