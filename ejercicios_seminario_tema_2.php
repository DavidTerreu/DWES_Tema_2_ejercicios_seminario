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

$texto7 = readline("Introduce el texto a capitalizar: ");
$texto7 = strtolower($texto7);

function capitalizarPalabras($texto7){
    $palabras = explode(" ", $texto7);
    for ($i = 0; $i < count($palabras); $i++) {
        $palabras[$i] = ucfirst($palabras[$i]);
    }
    return implode(" ", $palabras);
}

echo capitalizarPalabras($texto7);

//Ejercicio 8. Suma de dígitos.
echo "\n\n";
echo "Ejercicio 8";
echo "\n";

$num8 = readline("Introduce un número: ");

function sumaDigitos($num8){
    $suma = 0;
    for ($i = 0; $i < strlen($num8); $i++) {
        $suma += intval($num8[$i]);
    }
    return $suma;
}

echo "La suma de los dígitos de " . $num8 . " es: " . sumaDigitos($num8);

//Ejercicio 9. Máximo común divisor (MCD).
echo "\n\n";
echo "Ejercicio 9";
echo "\n";

$num1 = intval(readline("Introduce el primer número: "));
$num2 = intval(readline("Introduce el segundo número: "));

function mcd($num1, $num2){
    $arrayNum1 = [];
    $arrayNum2 = [];
    $contNum = 0;
    $mcdMAX = 0;
    for ($i = 1; $i <= $num1; $i++) {
        if ($num1 % $i === 0) {
            $arrayNum1[$contNum] = $i;
            $contNum++;
        }
    }
    $contNum = 0;
    for ($i = 1; $i <= $num2; $i++) {
        if ($num2 % $i === 0) {
            $arrayNum2[$contNum] = $i;
            $contNum++;
        }
    }

    echo "Divisores de " . $num1 . ": ";
    for ($i = 0; $i < count($arrayNum1); $i++) {
        echo $arrayNum1[$i] . " ";
    }
    echo "\nDivisores de " . $num2 . ": ";
    for ($i = 0; $i < count($arrayNum2); $i++) {
        echo $arrayNum2[$i] . " ";
    }

    $primero = $arrayNum1;
    $segundo = $arrayNum2;

    if (count($arrayNum1) > count($arrayNum2)) {
        $primero = $arrayNum2;
        $segundo = $arrayNum1;
    }

    for ($i = 0; $i < count($primero); $i++) {
        for ($j = 0; $j < count($segundo); $j++) {
            if ($primero[$i] === $segundo[$j]) {
                if ($primero[$i] > $mcdMAX) {
                    $mcdMAX = $primero[$i];
                }
            }
        }
    }
    echo "\nEl máximo común divisor (MCD) de " . $num1 . " y " . $num2 . " es: " . $mcdMAX;

    if ($mcdMAX === 1) {
        echo "\nLos números son primos relativos.";
    } else {
        echo "\nLos números no son primos relativos.";

    }
}

mcd($num1, $num2);