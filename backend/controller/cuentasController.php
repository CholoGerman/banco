<?php
require_once "../model/cuentas.php";
function cargarSaldo(){
    
 
    $numeroCuenta = $_POST['numero_cuenta'];
    $monto = $_POST['monto'];
    $resultado = (new cuentas())->cargarSaldo($numeroCuenta, $monto);
    echo json_encode($resultado);
}
     
function verSaldo(){
    $numeroCuenta = $_POST['numero_cuenta'];
    $resultado = (new cuentas())->verSaldo($numeroCuenta);
    echo json_encode($resultado);
}




?>