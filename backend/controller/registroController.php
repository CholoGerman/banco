<?php

require_once '../model/registroDAO.php';

$funcion = $_GET['funcion'];

switch ($funcion) {
    case "Guardar":
        GuardarUsuario();
    break;
    case "Eliminar":
        EliminarUsuario();
    break;
 
}




function GuardarUsuario(){
    $nombreCompleto = $_GET['nombre_completo'];
    $numeroCuenta = $_GET['numero_cuenta'];
    $correo = $_GET['correo_electronico'];
    $contraseña = $_GET['contraseña'];
    $resultado = (new usuarios())->GuardarUsuario($nombreCompleto, $numeroCuenta, $correo, $contraseña);
    echo json_encode($resultado);
}

function EliminarUsuario(){
    $id_user = $_GET['id_user'];
    $resultado = (new usuarios())->EliminarUsuario($id_user);
    echo json_encode($resultado);
}





?>