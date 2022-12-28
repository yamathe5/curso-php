<?php

    $jsonContenido='[
        {"nombre":"Oscar", "apellido":"Uh"},
        {"nombre":"Jose", "apellido":"Oh"}

    ]';
    
    $resultado = json_decode($jsonContenido);
    print_r($resultado);

    foreach ($resultado as $persona) {
        //print_r($persona);
        //print_r($persona->nombre);
        echo "<br/>"."Nombre: " . $persona->nombre . " " . $persona->apellido;
    }

?>