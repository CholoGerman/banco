<?php


require_once "../conexion/conexion.php";

class cuentas {
 
  

function verSaldo($numeroCuenta){
    $sql = "SELECT saldo FROM cuentas WHERE numero_cuenta = $numeroCuenta";
    $connection = connection();
    $respuesta = $connection->query($sql);
    return $respuesta;
 
}

/* public function cargarSaldo($id_cuenta, $monto, $moneda){
    $sql = "";
    $connection = connection();

   
    $conversiones = array(
        "USD" => 40, 
        "EUR" => 45, 
        "UYU" => 1  
    );

    if(array_key_exists($moneda, $conversiones)){
        $montoUYU = $monto * $conversiones[$moneda];
        $sql = "UPDATE cuentas SET saldo = saldo + $montoUYU WHERE id_cuenta = $id_cuenta;";
    } else {
       
        return "Moneda no disponible";
    }

    $respuesta = $connection->query($sql);
    return $respuesta;
}
    */
}


?>