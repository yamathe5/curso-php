<?php

session_start();

$_SESSION["usuario"] = "develoteca";
$_SESSION["estatus"] = "logeado";

echo "Session iniciada"."<br/>";

echo "usuario ".$_SESSION["usuario"] . " estatus: " . $_SESSION["estatus"];



?>