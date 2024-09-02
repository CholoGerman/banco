<?php
require_once "../model/transaccionDAO.php";

function realizarTransaccion()
{
    $nombreCompleto = $_POST['nombre_completo'];
    $cuentaOrigen = $_POST['cuenta_origen'];
    $cuentaDestino = $_POST['cuenta_destino'];
    $moneda = $_POST['moneda'];
    $monto = $_POST['monto'];
    $motivo = $_POST['motivo'];
    $resultado = (new transacciones())->realizarTransaccion($nombreCompleto, $cuentaOrigen, $cuentaDestino, $moneda, $monto, $motivo);
    echo json_encode($resultado);
}


?>