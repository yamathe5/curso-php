<?php

$frutas = array("fresa", "manzana", "pera");
$frutas2 = array("f"=>"fresa", "m"=>"manzana", "p"=>"pera");

print_r($frutas);
echo "<br/>";

print_r($frutas2);
echo "<br/>";

echo $frutas[0]."<br/>";
echo $frutas2["m"]."<br/>";

echo "<br/>";
for ($i=0; $i < 3; $i++) { 
    # code...
    echo $i." ".$frutas[$i]."<br/>";
}
echo "<br/>";

foreach ($frutas2 as $key => &$value) {
    echo "El indice: " .$key . " tiene el valor: " . $value."<br/> ";
    # code...
}
?>