<?php

//Ejercicio 1. Número máximo de un array.
echo "Ejercicio 1";
echo "\n";

$arrayNum = [2, 4, 1, 5, 6, 3];
function numeroAlto($arrayNum){
    $numAlto = $arrayNum[0];
    for ($i = 1; $i < count($arrayNum); $i++) {
        if ($arrayNum[$i] > $numAlto) {
            $numAlto = $arrayNum[$i];
        }
    }
    return $numAlto;
}

echo numeroAlto($arrayNum);


//Ejercicio 2. Sumatoria de un array.
echo "\n\n";
echo "Ejercicio 2";
echo "\n";

$arrayNum = [2, 4, 1, 5, 6, 3];
function sumarNumeros($arrayNum){
    $suma = 0;
    for ($i = 0; $i < count($arrayNum); $i++) {
        $suma += $arrayNum[$i];
    }
    return $suma;
}

echo sumarNumeros($arrayNum);

//Ejercicio 3. Conversión de millas a kilómetros.
echo "\n\n";
echo "Ejercicio 3";
echo "\n";

$num = floatval(readline("Ingrese la cantidad de millas a convertir: "));

function millasKilometros($num){
    $km = $num * 1.60934;

    return $km;
}

echo $num . " millas son " . millasKilometros($num). "kilómetros.";

//Ejercicio 4. Palíndromo.
echo "\n\n";
echo "Ejercicio 4";
echo "\n";

$frase = readline("Introduce una palabra: ");

function esPalin($frase){
    $res = "";
    for ($i = 0; $i < count($frase); $i++) {
        $j = count($frase);
        if ($frase[$i] !== $frase[j) - 1]) {
            $res += "No es palíndromo";
            break;
        } else $j--;
        if ($i >= $j) {
            $res += "Es palíndromo";
            break;
        }
    }
    return $res;
}

echo esPalin($frase);

//Ejercicio 5. Contar ocurrencias de una letra.