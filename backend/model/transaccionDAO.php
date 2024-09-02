<?php

class transacciones {

    public function GuardarTransaccion( $nombreCompleto, $numeroCuenta, $correo, $contraseña, $fecha){
        $sql = "INSERT INTO usuarios(0, nombre_completo, numero_cuenta, correo_electronico, contraseña, fecha_registro) VALUES( '$nombreCompleto', '$numeroCuenta', '$correo', '$contraseña', '$fecha');";
        $connection = connection();
        $respuesta = $connection->query($sql);
        return $respuesta;
    }

    public function RealizarTransaccion($cuentaDestino, $monto, $moneda){
        $sql = "";
        $connection = connection();
    
       
        $conversiones = array(
            "USD" => 40, 
            "EUR" => 45, 
            "UYU" => 1  
        );
    
        if(array_key_exists($moneda, $conversiones)){
            $montoUYU = $monto * $conversiones[$moneda];
            $sql = "UPDATE cuentas SET saldo = saldo + $montoUYU WHERE cuenta_destino = $cuentaDestino;";
        } else {
           
            return "Moneda no disponible";
        }
    
        $respuesta = $connection->query($sql);
        return $respuesta;
    }

}
?>