<?php

$servidor = "localhost";//127.0.0.1
$usuario="root";
$contrasenia = "";

try {
    //code...
    $conexion = new PDO("mysql:host=$servidor;dbname=album", $usuario, $contrasenia);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "INSERT INTO `fotos` (`id`, `nombre`, `ruta`) VALUES (NULL, 'Nombre archivo', 'foto.jpg');";

    $conexion->exec($sql);

    echo "Conexion estrablecida";
} catch (PDOException $error) {
    echo "Conexion erronea".$error;
    //throw $th;
}

?>