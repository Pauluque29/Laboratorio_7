<?php
try{
    //$conection = new PDO("mysql:host=localhost;dbname=Paul","root","",3308);
    $conection = new PDO("mysql:dbname=Paul; host=127.0.0.1;port=3308","root","");
    $conection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conectado exitosamente con PDO";
}catch (PDOException $e) {
    echo "La conexion fallo: ".$e->getMessage();
}
?>