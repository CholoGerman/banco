<?php

session_start();

if(isset($_SESSION['correo'])){
    
    echo 'Bienvenido';
} else{
    echo 'Por favor inicia sesión';
}
?>