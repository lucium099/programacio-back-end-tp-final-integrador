<?php

$numeros_pares = [];
for ($i = 0; $i < 10; $i++) {
    $numeros_pares[] = $i * 2;
}
echo "1)";
echo"<br>";

foreach ($numeros_pares as $numero) {
    echo $numero . "<br>";
}

echo "<br>";


$persona = [
    "Nombre" => "Pedro",
    "Apellido" => "Torres",
    "Direccion" => "Av. Mayo 3703",
    "Telefono" => "1122334455"
];

echo "2)";
echo"<br>";
foreach ($persona as $clave => $valor) {
    echo "$clave: $valor<br>";
}

echo "<br>";


$ciudades = ["Madrid", "Barcelona", "Londres", "New York", "Los Angeles", "Chicago"];
echo "3)";
echo"<br>";
foreach ($ciudades as $indice => $ciudad) {
    echo "La ciudad con el indice $indice tiene el nombre $ciudad.<br>";
}

echo "<br>";


$ciudades_asociativas = [
    "MD" => "Madrid",
    "BCL" => "Barcelona",
    "LD" => "Londres",
    "NY" => "New York",
    "LA" => "Los Angeles",
    "CCG" => "Chicago"
];

echo "4)";
echo"<br>";
foreach ($ciudades_asociativas as $indice => $ciudad) {
    echo "El indice de $ciudad es $indice.<br>";
}
?>




