let password = document.getElementById('password');
let user = document.getElementById('user');
let submit = document.getElementById('submit');
let passwordAdmin = 137902;
let userAdmin = "francozufia";

password.onkeyup = function () {compare(passwordAdmin);}
user.onkeyup = function () {compare(userAdmin);}

function compare(){
    if(password.value != passwordAdmin || user.value != userAdmin){
        submit.disabled = true;
    }
    else{
        submit.disabled = false;
    }
}

  








