<?php

require_once "../conexion/conexion.php";

class usuarios {

    public function GuardarUsuario($nombreCompleto, $numeroCuenta, $correo, $contraseña){
        $sql = "INSERT INTO usuarios(0, nombre_completo, numero_cuenta, correo_electronico, contraseña, 0) VALUES( '$nombreCompleto', '$numeroCuenta', '$correo', '$contraseña');";
        $connection = connection();
        $respuesta = $connection->query($sql);
        return $respuesta;
        
    }

    public function EliminarUsuario($id_user){
        $sql = "DELETE FROM usuarios WHERE id_user = $id_user;";
        $connection = connection();
        $respuesta = $connection->query($sql);
        return $respuesta;
    }


}