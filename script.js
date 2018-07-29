var validation = document.getElementById('send');
var nom = document.getElementById('nom');
var nom_m = document.getElementById('nom_m');
var email = document.getElementById('email');
var email_m = document.getElementById('email_m');

validation.addEventListener('click', f_valid);

function f_valid(){
    if (nom.validity.valueMissing){
        nom_m.classList.remove("disp_none");
    }
    
    
    
}