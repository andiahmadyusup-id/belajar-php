let btnShow = document.querySelector("#btn-show");
let pass = document.querySelectorAll(".password");

btnShow.addEventListener("click", () => {
 for(let i = 0; i < pass.length; i++ ){
    if(pass[i].type === "password"){
        pass[i].type = "text";
    } else{
        pass[i].type = "password";
    }
 }


});