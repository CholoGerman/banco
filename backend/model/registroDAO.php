<?php

require_once "../conexion/conexion.php";

class usuarios {

    public function GuardarUsuario( $nombreCompleto, $numeroCuenta, $correo, $contraseña, $fecha){
        $sql = "INSERT INTO usuarios(nombre_completo, numero_cuenta, correo_electronico, contraseña, fecha_registro) VALUES( '$nombreCompleto', '$numeroCuenta', '$correo', '$contraseña', '$fecha');";
        $connection = connection();
        $respuesta = $connection->query($sql);
        return $respuesta;
    }

}