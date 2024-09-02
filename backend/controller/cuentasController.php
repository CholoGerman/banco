<?php
require_once "../model/cuentas.php";

function verSaldo()
{
    $numeroCuenta = $_POST['numero_cuenta'];
    $resultado = (new cuentas())->verSaldo($numeroCuenta);
    echo json_encode($resultado);
}
