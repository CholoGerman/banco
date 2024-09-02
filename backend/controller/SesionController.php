<?php
require_once '../model/SesionDAO.php';

function login(){
    $correo = $_POST['correo'];
    $contraseña = $_POST['contraseña'];

    $dao = new SesionDAO();
    $usuario = $dao->getUsuarioCorreo($correo);

    if ($usuario && password_verify($contraseña, $usuario['contraseña'])) {
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
    session_unset();
    header('Location: ../../frontend/page/login.html');
    exit;
}




?>