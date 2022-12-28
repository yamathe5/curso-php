<?php

session_start();


if (isset($_SESSION["usuario"])) {
    # code...

    echo "usuario ".$_SESSION["usuario"] . " estatus: " . $_SESSION["estatus"];

}else{
    echo "No hau datos";
}



?>