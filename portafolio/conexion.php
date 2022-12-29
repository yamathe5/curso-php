<?php

class conexion
{
  private $servidor = "localhost";
  private $usuario = "root";

  private $contrasenia = "";
  private $conexion;

  public function __construct()
  {
    try {
      $this->conexion = new PDO("mysql:host=$this->servidor;dbname=album", $this->usuario, $this->contrasenia);
      $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      //code...
    } catch (PDOException $e) {
      return "falla de conexion" . $e;
      //throw $th;
    }
  }

  public function ejecutar($sql) //insertar/ delete / actualizar
  {
    $this->conexion->exec($sql);
    return $this->conexion->lastInsertId();
  }

  public function consultar($sql)
  {
    $sentencia = $this->conexion->prepare($sql);
    $sentencia->execute();
    return $sentencia->fetchAll();
  }

  // public 
}
