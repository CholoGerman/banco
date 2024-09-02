<?php

require_once "../conexion/conexion.php";

class usuarios {
  
    if(isset($_POST['loginButton'])){
        $correo=$_POST['correo'];
        $contraseña=$_POST['contraseña'];
    
        $sql="SELECT * FROM usuarios WHERE correo='$correo' && contraseña= '$contraseña'";
        $connection = connection();
        $respuesta = $connection->query($sql);
        return $respuesta;
        echo 'Bienvenido';
        header('location: ../../frontend/page/transaccion.html')
    } else{
        echo 'Por favor inicia sesión';
        header('Location: ../../frontend/page/login.php');
    }
 

}

?>