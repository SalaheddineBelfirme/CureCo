

// const menubtn = document.querySelector("#menu-btn");
// const navbar = document.querySelector(".header .navbar");




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
        if(res.test(password)){
            
        }
        else{
           
        }
        return res.test(number)
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
