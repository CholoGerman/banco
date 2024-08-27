<?php


require_once "../conexion/conexion.php";

class cuentas {
 
  

function verSaldo($numeroCuenta){
    $sql = "SELECT saldo FROM cuentas WHERE numero_cuenta = $numeroCuenta";
    $connection = connection();
    $respuesta = $connection->query($sql);
    return $respuesta;
 
}

public function cargarSaldo($id_cuenta, $monto){
    $sql = "UPDATE cuentas SET saldo = saldo + $monto WHERE id_cuenta = $id_cuenta;";
    $connection = connection();
    $respuesta = $connection->query($sql);
    return $respuesta;
    
}
}


?>