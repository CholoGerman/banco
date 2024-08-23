<?php


function GuardarUsuario(){
    $nombreCompleto = $_POST['nombre_completo'];
    $numeroCuenta = $_POST['numero_cuenta'];
    $correo = $_POST['correo_electronico'];
    $contraseña = $_POST['contraseña'];
    $fecha = $_POST['fecha_registro'];
    $resultado = (new usuarios())->GuardarUsuario($nombreCompleto, $numeroCuenta, $correo, $contraseña, $fecha);
    echo json_encode($resultado);
}






?>