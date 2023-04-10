<?php
//Conexion al servidor
    $connection = mysqli_connect("localhost","root","","",3308);
    echo "<pre>";
    var_dump($connection);
    echo "</pre>";
?>