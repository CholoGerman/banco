// function validarContraseña() {
//     const passwordInput = document.getElementById('password');
//     const errorMessage = document.getElementById('error-message');
//     const password = passwordInput.value;


//     const hasNumber = /\d/;
    
//     const hasLetter = /[a-zA-Z]/;

//      if (password.length < 8) {
//         errorMessage.textContent = "La contraseña debe tener al menos 8 caracteres.";
//     } else if (!hasLetter.test(password)) {
//         errorMessage.textContent = "La contraseña debe contener al menos una letra.";
//     } else if (!hasNumber.test(password)) {
//         errorMessage.textContent = "La contraseña debe contener al menos un número.";
//     } else {
//         errorMessage.textContent = "Contraseña Válida";
//     }
// }


// function ocultarError() {
//     const errorMessage = document.getElementById('error-message');
//     errorMessage.textContent = "";
// }



//Capturar los datos :

function registrarUsuario(event) {
    event.preventDefault();
    
    const correo = document.getElementById('correo').value;
    const clave = document.getElementById('clave').value;
    
    const datos = new FormData();
    datos.append('correo', correo);
    datos.append('contraseña', clave);
    
    fetch('login.php', {
        method: 'POST',
        body: datos
    })
    .then(response => response.json())
    .then(data => {
        alert(data.message);
        if (data.success) {
            document.getElementById('login').reset(); // Limpia el formulario
        }
    })
    .catch(error => {
        console.error('Error:', error);
    });
}