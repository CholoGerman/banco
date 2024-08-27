<?php

class transacciones {

    public function GuardarTransaccion( $nombreCompleto, $numeroCuenta, $correo, $contraseña, $fecha){
        $sql = "INSERT INTO usuarios(0, nombre_completo, numero_cuenta, correo_electronico, contraseña, fecha_registro) VALUES( '$nombreCompleto', '$numeroCuenta', '$correo', '$contraseña', '$fecha');";
        $connection = connection();
        $respuesta = $connection->query($sql);
        return $respuesta;
    }

    function realizarTransaccion($cuentaDestino, $monto){
         $sql = "UPDATE cuentas SET saldo = saldo + $monto WHERE numero_cuenta = $cuentaDestino;";
    
    
       
        
        
    }

}
?>