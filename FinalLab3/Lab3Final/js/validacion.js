const password = document.getElementById('password');
const verifyPassword = document.getElementById('verifyPassword');
const submit = document.getElementById('submit');
const alert = document.getElementById('alert');


password.onkeyup = function () {compare();}
verifyPassword.onkeyup = function () {compare();}

function compare(){
    if(password.value != verifyPassword.value){
        alert.style.visibility = 'inherit';
        submit.disabled = true;
    }
    else{
        alert.style.visibility = 'hidden';
        submit.disabled = false;
    }
}



