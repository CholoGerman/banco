
function validatePassword() {
    const passwordInput = document.getElementById('password');
    const errorMessage = document.getElementById('error-message');
    const password = passwordInput.value;


    const hasNumber = /\d/;

    if (password.length < 8) {
        errorMessage.textContent = "La contraseño debe tener al menos 8 caracteres.";
    } else if (!hasNumber.test(password)) {
        errorMessage.textContent = "La contraseña debe contener al menos un número.";
    } else {
        errorMessage.textContent = "Contraseña valida";
    }

}

function sotruebestie(){
    const passwordInput = document.getElementById("password");
    const digest = crypto.subtle.digest('SHA-1', passwordInput);
    const password = "37117ba38cad98cb753e77c639192adbc1389094";
    const errorMessage = document.getElementById('error-message2');
    
    if (passwordInput == password){
        errorMessage.textContent = "so true!";
    }
    else{
        errorMessage.textContent = "false!!!!!!";
    }
}

//window.onload = () => {

    /*function process(){
        var form = document.getElementById("form").value;
        console.log(form);
    }*/


    /*let formElement = document.getElementsByClassName("#form");
    console.log("a", formElement);
    formElement.onsubmit = async (e) => {
        console.log("yeag");
        e.preventDefault();
        let formFormData = new FormData(formElement);
        let url = "";

        let config = {
            method: 'POST',
            body: formFormData

        }

        let respuesta = await fetch(url, config);
        let datos = await respuesta.json()
        console.log(datos);

        if (datos.length > 0) {
            alert("Usuario correcto")
        }

        else {
            alert("Usuario o contraseña incorrectos")
        }
    }*/
//} 
/*
var error = false;
var message = '';
if (y.length < 4) {
  message += "Your password needs a minimum of four characters. ";
  error = true;
}
if (y.search(/[a-z]/) == -1) {
  message += "Your password needs at least one lower case letter. ";
  error = true;
}
if (y.search(/[A-Z]/) == -1) {
  message += "Your password needs at least one upper case letter. ";
  error = true;
}
if (y.search (/[0-9]/) == -1) {
  message += "Your password needs a number.";
  error = true;
}
if (error) {
  alert(message);
  return false;
}*/

/*function validatePassword() {
    const passwordInput = document.getElementById('password');
    const errorMessage = document.getElementById('error-message');
    const password = passwordInput.value;

    // Expresión regular para validar que al menos un número esté presente
    const hasNumber = /\d/;

    if (password.length > 8) {
        errorMessage.textContent = "Password cannot exceed 8 characters.";
    } else if (!hasNumber.test(password)) {
        errorMessage.textContent = "Password must contain at least one number.";
    } else {
        errorMessage.textContent = "";
    }
}*/