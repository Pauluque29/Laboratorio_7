<?php
//cadena de conexion al servidor
$conection = mysqli_connect("localhost","root","","Paul",3308);
//Para verificar si exixte algun error
if (!$conection) {
    die("La conexion fallo: ".mysql_connect_error());
}
echo "Conectado exitosamente con procedimientos";

//Cerrar la conexion
mysqli_close($conection);
?>