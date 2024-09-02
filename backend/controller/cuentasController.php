<?php
require_once "../model/cuentas.php";
/* function cargarSaldo()
{


    $numeroCuenta = $_POST['numero_cuenta'];
    $monto = $_POST['monto'];
    $moneda = $_POST['moneda'];
    $resultado = (new cuentas())->cargarSaldo($numeroCuenta, $monto, $moneda);
    echo json_encode($resultado);
}
*/ 
function verSaldo()
{
    $numeroCuenta = $_POST['numero_cuenta'];
    $resultado = (new cuentas())->verSaldo($numeroCuenta);
    echo json_encode($resultado);
}
