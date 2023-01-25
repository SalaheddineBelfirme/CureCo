

// const menubtn = document.querySelector("#menu-btn");
// const navbar = document.querySelector(".header .navbar");

function vide(){
 
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
   
    console.log(result);

 }
 
  
})
a=JSON.parse(localStorage.getItem("data"));
var inputs=`<h1 class="modal-title fs-5" id="exampleModalLabel  "> Product`+nb+` </h1>
<input name="name[]" type="text" class="form-control name" placeholder="name`+nb+`" aria-label="Username"
           aria-describedby="basic-addon1" >
       <input name="libelle[]" type="text" class="form-control libelle" placeholder="libelle" aria-label="Username"
           aria-describedby="basic-addon1">
       <input name="prix[]" type="text" class="form-control prix" placeholder="prix`+nb+`"
           aria-label="Recipient's username" aria-describedby="basic-addon2" required>
       <input accept=".jpg,jpeg,.png" name="imageadd[]" type="file" class="form-control imageadd" >`

 var select ="<select name='category[]' class='form-select category' aria-label='Default select example' >"

for (let i = 0; i < a.length; i++) {
  var option ="<option value='"+a[i].id_c+"' selected>"+a[i].name_categorie+" </option>"
  select+=option
}
select+=' <option value="0" selected>Categorie </option> </select>'
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
  
              function Save(event){
                event.preventDefault()
                
                names=document.getElementsByClassName("name")
                categorys=document.getElementsByClassName("category")
                prixs=document.getElementsByClassName("prix")
                imageadds=document.getElementsByClassName("imageadd")
                libelles=document.getElementsByClassName("libelle")
                form=document.getElementById("FormAdd")
                let bol=true;
                  for(let i=0;i<names.length;i++){
                   let  name=names[i]

             
                if(validateText(name.value)){     
                  name.style.borderColor = "blue";
                }
                else{
                  name.style.borderColor = "red";
                  bol=false;
                }
                  }

                  for(let i=0;i<categorys.length;i++){
                    let  category=categorys[i]
                    
               
                 if(validateText(category.value) ){     
                   category.style.borderColor = "blue";
                 }
                 if(category.value=="0"){
                  
                   category.style.borderColor = "red";
                   bol=false;
                 }
                   }
                   for(let i=0;i<prixs.length;i++){
                    let  prix=prixs[i]
                    
               
                 if(validatenuber(prix.value)){     
                   prix.style.borderColor = "blue";
                 }
                 else{
                   prix.style.borderColor = "red";
                   bol=false;
                 }
                   }
                   for(let i=0;i<libelles.length;i++){
                    let  libelle=libelles[i]
                    
               
                 if(validateText(libelle.value)){     
                   libelle.style.borderColor = "blue";
                 }
                 else{
                   libelle.style.borderColor = "red";
                   bol=false;
                 }
                   }
                   for(let i=0;i<imageadds.length;i++){
                    let  image=imageadds[i]
                    
               
                 if(validateText(image.value)){     
                   image.style.borderColor = "blue";
                 }
                 else{
                   image.style.borderColor = "red";
                   bol=false;
                 }
                   }
             if(bol){
              form.submit()
             }else{
              // Swal.fire({
              //   icon: 'error',
              //   title: 'Oops...',
              //   text: 'Something went wrong!',
              //   footer: '<a href="">Why do I have this issue?</a>'
              // })
            
             }
            
            
                let  modle=document.getElementById("modleadd")
                modle.innerHTML = "";
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
    let libellepER=document.getElementById("libellepER")
    let libellep=document.getElementById("libellep").value;
    let category=document.getElementById("catgoryp").value
    let catgoryER=document.getElementById("catgorypER")
    let prix=document.getElementById("prixp").value
    let prixER=document.getElementById("prixpER")

    event.preventDefault();
  
    let bol=true;
    libellepER.innerHTML=""
    if(validateText(libellep)){
      libellepER.innerHTML=(libellep + " is valid");
      libellepER.style.color="blue"
    }
    else{
      libellepER.innerHTML=(libellep + " is not valid");
      libellepER.style.color="red"
      bol=false;
    }
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
      form.submit(); 
    }
    else{
      return false
    }



    
  }




// document.addEventListener("DOMContentLoaded",()=>{

//   console.log("ggggaaaggggggggg");
// })
