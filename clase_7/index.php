<?php

function calcularCuadrado($lado) {
    $perimetro = 4 * $lado;
    $superficie = $lado * $lado;
    
    echo "a) Perimetro del cuadrado: $perimetro\n";
    echo "   Superficie del cuadrado : $superficie\n\n";
}


function mostrarMayusculas($cadena) {
    echo "<br>b) Cadena en mayusculas: " . strtoupper($cadena) . "\n";
}

function mostrarMinusculas($cadena) {
    echo "   Cadena en minusculas: " . strtolower($cadena) . "\n\n";
}


function diasDelMes($mes) {
    if ($mes < 1 || $mes > 12) {
        return "   Mes invalido.\n";
    }
    if ($mes == 2) {
        return "   Febrero tiene 28 o 29 dias.\n";
    }
    return ($mes == 4 || $mes == 6 || $mes == 9 || $mes == 11) ? 
        "   El mes tiene 30 dias.\n" : 
        "   El mes tiene 31 dias.\n";
}


function esPalindromo($cadena) {
   
    $cadena = strtolower(str_replace(' ', '', $cadena));
    return $cadena === strrev($cadena);
}




$lado = 5;
calcularCuadrado($lado);


$cadena = "Hola Mundo";
mostrarMayusculas($cadena);
mostrarMinusculas($cadena);


$mes = 4; 
$resultado = diasDelMes($mes);
echo "<br>c) " . $resultado;


$frase = "Somos o no somos";
if (esPalindromo($frase)) {
    echo "<br>d) La cadena '$frase' es un palindromo.\n";
} else {
    echo "d) La cadena '$frase' no es un palindromo.\n";
}
?>

