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