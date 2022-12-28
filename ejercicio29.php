<?php

$servidor = "localhost";//127.0.0.1
$usuario="root";
$contrasenia = "";

try {
    //code...
    $conexion = new PDO("mysql:host=$servidor;dbname=album", $usuario, $contrasenia);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "SELECT * FROM fotos";
    $sentencia = $conexion->prepare($sql);
    $sentencia->execute();

    $resultado = $sentencia->fetchAll();

    print_r($resultado);

    foreach ($resultado as $foto) {
        print_r($foto["nombre"]."<br/>");
        # code...
    }

    echo "Conexion estrablecida";
} catch (PDOException $error) {
    echo "Conexion erronea".$error;
    //throw $th;
}

?>