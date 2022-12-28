<?php

function imprimirNombre($nombre, $apellido="Apellido"){
    echo "Hola " . $nombre . " " . $apellido . "<br/>";

}

imprimirNombre("Oscar");
imprimirNombre("Pedro", "Perez");
imprimirNombre("Maria", "Martinez");

?>