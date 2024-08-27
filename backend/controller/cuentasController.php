<?php
require_once "../model/cuentas.php";
function cargarSaldo(){
    
 
    $numeroCuenta = $_GET['numero_cuenta'];
    $monto = $_GET['monto'];
    $resultado = (new cuentas())->cargarSaldo($numeroCuenta, $monto);
    echo json_encode($resultado);
}
     
function verSaldo(){
    $numeroCuenta = $_GET['numero_cuenta'];
    $resultado = (new cuentas())->verSaldo($numeroCuenta);
    echo json_encode($resultado);
}




?>