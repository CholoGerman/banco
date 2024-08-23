<?php

function login(){

    $usuario = $_POST['usuario'];
    $contraseña = $_POST['contraseña'];
 
    $hashedPassword = '$2y$10$V7H/Jr.mOafUoL5/7sjZjODJ/4UJoDgVQQ0fH0RgyxXPuFe/0z8Je';

if (password_verify($contraseña, $hashedPassword)) {
    session_start();
    $_SESSION['usuario'] = $usuario;
    echo "¡Contraseña correcta!";
} else {
    echo "Usuario o contraseña incorrectos.";
    session_destroy();
}


}

?>