<?php

$archivo = "contenido.txt";

$archivoAbierto = fopen($archivo, "r"); // abre modo r o lectura

$contenido = fread($archivoAbierto, filesize($archivo));

echo $contenido;
