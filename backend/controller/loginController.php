<?php

function login(){

    $usuario = $_POST['usuario'];
    $contraseña = $_POST['contraseña'];

    if ($usuario == 'banco' && $contraseña == '12345') {
       session_start();
      $_SESSION['usuario'] = $usuario;
       
    } else {
        echo "Usuario o contraseña incorrectos.";
        session_destroy();
    }

}

?>