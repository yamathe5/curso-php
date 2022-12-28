<?php

session_start();
session_destroy();

// esto si se imprimiio
// echo "usuario ".$_SESSION["usuario"] . " estatus: " . $_SESSION["estatus"];
echo "Se destruyo la sesion de usuairios"

?>