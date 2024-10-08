
function validatePassword() {
    const passwordInput = document.getElementById('password');
    const password2Input = document.getElementById('password2');
    const errorMessage = document.getElementById('error-message');
    const errorMessage2 = document.getElementById('error-message2');
    const password = passwordInput.value;
    const password2 = password2Input.value;


    const hasNumber = /\d/;
    

    if (password.length < 8 && password.length > 0) {
        errorMessage.textContent = "La contraseña debe tener al menos 8 caracteres.";
    } else if (!hasNumber.test(password) && password.length > 0) {
        errorMessage.textContent = "La contraseña debe contener al menos un número.";
    } else if (password.search(/[a-z]/) == -1 && password.length > 0) {
        errorMessage.textContent = "La contraseña debe contener al menos una minuscula.";
    } else if (password.search(/[A-Z]/) == -1 && password.length > 0) {
        errorMessage.textContent = "La contraseña debe contener al menos una mayuscula.";
    } else {
        errorMessage.textContent = "";
    }

    if (password != password2 && password2.length > 0){
        errorMessage2.textContent = "La contraseñas no son iguales.";
    } else {
        errorMessage2.textContent = "";
    }
    

}



window.onload = () => {

    agregarElemento();

    }

function agregarElemento(){
    let formdato = document.querySelector('#registro');
    formdato.onsubmit = (event) => {
        event.preventDefault();
        registroUsuario(formdato);
    }
}

function registroUsuario(form){

    const datos = new FormData(form);

    fetch('http://localhost/banco/banco-1/backend/controller/registroController.php' , {
        method : 'POST',
        body: datos
    })

    .then(response => response.json())
    .then(data => {
        alert(data.message);
        if(data.success){
            document.getElementById('registro').reset();
        }
    })

    .catch(error =>
        console.error('Error:' , error)
    );

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