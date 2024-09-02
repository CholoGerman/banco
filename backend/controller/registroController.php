<?php

require_once '../model/registroDAO.php';

$funcion = $_POST['funcion'];

switch ($funcion) {
    case "Guardar":
        GuardarUsuario();
    break;
    case "Eliminar":
        EliminarUsuario();
    break;
 
}




function GuardarUsuario(){
    $nombreCompleto = $_POST['nombre_completo'];
    $numeroCuenta = $_POST['numero_cuenta'];
    $correo = $_POST['correo_electronico'];
    $contraseña = $_POST['contraseña'];
    $resultado = (new usuarios())->GuardarUsuario($nombreCompleto, $numeroCuenta, $correo, $contraseña);
    echo json_encode($resultado);
}

function EliminarUsuario(){
    $id_user = $_POST['id_user'];
    $resultado = (new usuarios())->EliminarUsuario($id_user);
    echo json_encode($resultado);
}



?>