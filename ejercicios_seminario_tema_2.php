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
    for ($i = 0, $j = strlen($frase) -1; $i < $j; $i++, $j--) {
        if ($frase[$i] !== $frase[$j]) {
            return "No es palíndromo";
        }
    }
    return "Es palíndromo";
}

echo esPalin($frase);

//Ejercicio 5. Contar ocurrencias de una letra.
echo "\n\n";
echo "Ejercicio 5";
echo "\n";

$texto = readline("Introduce el texto: ");
$texto = strtolower($texto);
$letra = readline("Introduce la letra a contar: ");

function contarLetra($texto, $letra){
    $contador = 0;
    for ($i = 0; $i < strlen($texto); $i++) {
        if ($texto[$i] === $letra) {
            $contador++;
        }
    }
    return $contador;
}

echo "La letra '" . $letra . "' aparece " . contarLetra($texto, $letra) . " veces en el texto.";

//Ejercicio 6. Contar ocurrencias de una subcadena.
echo "\n\n";
echo "Ejercicio 6";
echo "\n";

$texto6 = readline("Introduce el texto: ");
$texto6 = strtolower($texto6);
$subcadena = readline("Introduce la subcadena a contar: ");
$subcadena = strtolower($subcadena);

function contarSubcadena($texto6, $subcadena){
    $contador = 0;
    $tamSubcadena = strlen($subcadena);

    for ($i = 0; $i <= strlen($texto6) - $tamSubcadena; $i++) {
        $coincide = true;
        for ($j = 0; $j < $tamSubcadena; $j++) {
            if ($texto6[$i + $j] !== $subcadena[$j]) {
                $coincide = false;
                break;
            }
        }
        if ($coincide) {
            $contador++;
        }
    }
    return $contador;
}

echo "La subcadena '" . $subcadena . "' aparece " . contarSubcadena($texto6, $subcadena) . " veces en el texto.";

//Ejercicio 7. Capitalizar palabras.
echo "\n\n";
echo "Ejercicio 7";
echo "\n";

//Ejercicio 8. Suma de dígitos.
echo "\n\n";
echo "Ejercicio 8";
echo "\n";

//Ejercicio 9. Máximo común divisor (MCD).
echo "\n\n";
echo "Ejercicio 9";
echo "\n";