function validarContraseña() {
    const passwordInput = document.getElementById('password');
    const errorMessage = document.getElementById('error-message');
    const password = passwordInput.value;


    const hasNumber = /\d/;
    
    const hasLetter = /[a-zA-Z]/;

     if (password.length < 8) {
        errorMessage.textContent = "La contraseña debe tener al menos 8 caracteres.";
    } else if (!hasLetter.test(password)) {
        errorMessage.textContent = "La contraseña debe contener al menos una letra.";
    } else if (!hasNumber.test(password)) {
        errorMessage.textContent = "La contraseña debe contener al menos un número.";
    } else {
        errorMessage.textContent = "Contraseña Válida";
    }
}


function ocultarError() {
    const errorMessage = document.getElementById('error-message');
    errorMessage.textContent = "";
}

//Capturar los datos :

document.querySelector('#login').addEventListener('submit', function(event) {
    event.preventDefault();

    const email = document.querySelector('input[name="email"]').value;
    const contraseña = document.querySelector('input[name="contraseña"]').value;

    const datos = {
        email: email,
        contraseña: contraseña,
    };

    fetch('http://localhost/banco/backend/controller/loginController.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify(datos)
    })
    .then(response => response.json())
    .then(data => console.log(data))
    

    console.log(datos);
});