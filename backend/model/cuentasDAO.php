<?php


require_once "../conexion/conexion.php";

class cuentas {
 
  

    function getSaldo($numeroCuenta) {
        $sql = "SELECT saldo FROM cuentas WHERE numero_cuenta = $numeroCuenta";
        $connection = connection();
        $respuesta = $connection->query($sql);
        return $respuesta;
    

}
}


?>