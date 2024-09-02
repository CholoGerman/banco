<?php

function login(){

    $correo = $_POST['correo'];
    $contraseña = $_POST['contraseña'];
 
    $hashedPassword = '$2y$10$V7H/Jr.mOafUoL5/7sjZjODJ/4UJoDgVQQ0fH0RgyxXPuFe/0z8Je';

if (password_verify($contraseña, $hashedPassword)) {
    session_start();
    $_SESSION['correo'] = $correo;
    echo "¡Contraseña correcta!";
} else {
    echo "Correo o contraseña incorrectos.";
    session_destroy();
}


}


function logOut(){
    session_start();
    session_destroy();
    header('Location: ../../frontend/page/login.html');
    exit;
}

?>