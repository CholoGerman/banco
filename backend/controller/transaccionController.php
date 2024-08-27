<?php
require_once "../model/transaccionDAO.php";

function realizarTransaccion(){
    $nombreCompleto = $_GET['nombre_completo'];
    $cuentaOrigen = $_GET['cuenta_origen']; 
    $cuentaDestino = $_GET['cuenta_destino']; 
    $moneda = $_GET['moneda']; 
    $monto = $_GET['monto'];
    $motivo = $_GET['motivo'];
    $resultado = (new transacciones())->realizarTransaccion($nombreCompleto, $cuentaOrigen, $cuentaDestino, $moneda, $monto, $motivo);
    echo json_encode($resultado);
    
    
    
}


    






?>