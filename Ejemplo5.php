<?php
    $conection = new mysqli("localhost", "root","","Paul",3308);

    //Para verificar si existe algun error
    if (!$conection) {
        die("La conexion fallo: ".$conection->connect_error());
    }
    echo "Conectado exitosamente con procedimientos";
    
    //Cerrar la conexion
    mysqli_close($conection);
?>