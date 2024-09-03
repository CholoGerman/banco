<?php


require_once "../conexion/conexion.php";

class cuentas {
 
  

function verSaldo($numeroCuenta){
    $sql = "SELECT saldo FROM cuentas WHERE numero_cuenta = $numeroCuenta";
    $connection = connection();
    $respuesta = $connection->query($sql);
    return $respuesta;
 
}

}


?>