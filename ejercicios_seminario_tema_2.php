<?php

/*
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
}

mcd($num1, $num2);


//Ejercicio 10. Fibonacci
echo "\n\n";
echo "Ejercicio 10";
echo "\n";

$numFibo = intval(readline("Introduce el número de la sucesión Fibonacci: "));

function fibonacci($numFibo){
    $a = 0;
    $b = 1;
    $secuencia = [];

    for ($i = 0; $i < $numFibo; $i++) {
        $secuencia[$i] = $a;
        $aux = $a;
        $a = $b;
        $b = $aux + $b;
    }
    return $secuencia;
}

$secuencia = fibonacci($numFibo);
echo "Fibonacci de los primeros " . $numFibo . " números): " . implode(", ", $secuencia) . "\n";

//Ejercicio 11. Números primos relativos
echo "\n\n";
echo "Ejercicio 11";
echo "\n";

$numA = intval(readline("Introduce el primer número: "));
$numB = intval(readline("Introduce el segundo número: "));

function mcd2($numA, $numB){
    $arrayNumA = [];
    $arrayNumB = [];
    $cNum = 0;
    $mcdM = 0;
    for ($i = 1; $i <= $numA; $i++) {
        if ($numA % $i === 0) {
            $arrayNumA[$cNum] = $i;
            $cNum++;
        }
    }
    $cNum = 0;
    for ($i = 1; $i <= $numB; $i++) {
        if ($numB % $i === 0) {
            $arrayNumB[$cNum] = $i;
            $cNum++;
        }
    }

    echo "Divisores de " . $numA . ": ";
    for ($i = 0; $i < count($arrayNumA); $i++) {
        echo $arrayNumA[$i] . " ";
    }
    echo "\nDivisores de " . $numB . ": ";
    for ($i = 0; $i < count($arrayNumB); $i++) {
        echo $arrayNumB[$i] . " ";
    }

    $primero = $arrayNumA;
    $segundo = $arrayNumB;

    if (count($arrayNumA) > count($arrayNumB)) {
        $primero = $arrayNumB;
        $segundo = $arrayNumA;
    }

    for ($i = 0; $i < count($primero); $i++) {
        for ($j = 0; $j < count($segundo); $j++) {
            if ($primero[$i] === $segundo[$j]) {
                if ($primero[$i] > $mcdM) {
                    $mcdM = $primero[$i];
                }
            }
        }
    }
    echo "\nEl máximo común divisor (MCD) de " . $numA . " y " . $numB . " es: " . $mcdM;

    if ($mcdM === 1) {
        echo "\nLos números son primos relativos.";
    } else {
        echo "\nLos números no son primos relativos.";

    }
}

mcd2($numA, $numB);

//Ejercicio 12. Número capicúa
echo "\n\n";
echo "Ejercicio 12";
echo "\n";

$esNum = false;

do {
    $numCapi = readline("Introduce el número: ");

    if (is_numeric($numCapi)) {
        $esNum = true;
    } else echo "Por favor, introduce un número válido.\n";

} while (!$esNum || $numCapi < 0);

function esCapicua($numCapi){
    for ($i = 0, $j = strlen($numCapi) -1; $i < $j; $i++, $j--) {
        if ($numCapi[$i] !== $numCapi[$j]) {
            return "No es capicúa.";
        }
    }
    return "Es capicúa.";
}

echo esCapicua($numCapi);

//Ejercicio 13. Generador de tabla HTML
echo "\n\n";
echo "Ejercicio 13";
echo "\n";

$atribClass = ".";
$atribID = "#";
$esClase = false;
$esID = false;
$generador = "";

$cadenatxt = readline("Introduce la cadena de texto: ");

for ($i = 0; $i < strlen($cadenatxt); $i++) {
    if ($cadenatxt[$i] === $atribClass) {
        $esClase = true;
    }
    if ($cadenatxt[$i] === $atribID) {
        $esID = true;
    }
}

$arrayclass = explode(".", $cadenatxt);
$arrayID = explode("#", $cadenatxt[1]);

for ($i = 0; $i < count($arrayclass); $i++) {
    echo $arrayclass[$i]."\n";
}
for ($i = 0; $i < count($arrayID); $i++) {
    echo $arrayID[$i]."\n";
}

$generador .= "<" . $arrayclass[0];

if ($esClase) {
    $generador .= " class =" . $arrayclass[1];
    if ($esID) {
        $generador .= '"' . $arrayclass[1] . '" id ="' . $arrayID[1] . '">';
    } else {
        $generador .= '"' . $arrayclass[1] . '">';
    }
}

//Ejercicio 14. Mosaico numérico
echo "\n\n";
echo "Ejercicio 14";
echo "\n";

$num = readline("Introduce el límite del mosaico numérico: ");

function mosaico($num){
    for ($i = 1; $i <= $num; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo $i . " ";
        }
        echo "\n";
    }
}
mosaico($num);

//Ejercicio 15. Comparar arrays elemento a elemento
echo "\n\n";
echo "Ejercicio 15";
echo "\n";

$arrayA = [];
$arrayB = [];

$largo = readline("Introduce el límite de los arrays: ");

for ($i = 0; $i < $largo; $i++) {
    echo "Introduce el elemento " . ($i + 1) . " del array A: ";
    $arrayA[$i] = readline();
}

for ($i = 0; $i < $largo; $i++) {
    echo "Introduce el elemento " . ($i + 1) . " del array B: ";
    $arrayB[$i] = readline();
}

function comparacion($arrayA, $arrayB){
    $arrayFinal = [];
    for ($i = 0; $i < count($arrayA); $i++) {
        if ($arrayA[$i] === $arrayB[$i]) {
            $arrayFinal[$i] = true;
        } else {
            $arrayFinal[$i] = false;
        }
    }
    return $arrayFinal;
}

$arrayFinal = comparacion($arrayA, $arrayB);
foreach ($arrayFinal as $valor) {
    echo ($valor ? 'true' : 'false') . " ";
}

//Ejercicio 16. Producto de elementos de un array
echo "\n\n";
echo "Ejercicio 16";
echo "\n";

$array = [];

$largo = readline("Introduce el límite del array: ");

for ($i = 0; $i < $largo; $i++) {
    echo "Introduce el elemento " . ($i + 1) . " del array: ";
    $array[$i] = readline();
}

function producto($array){
    $num = 1;
    for ($i = 0; $i < count($array); $i++) {
        $num *= $array[$i];
    }
    return $num;
}

echo producto($array);

//Ejercicio 17. Filtrar números pares
echo "\n\n";
echo "Ejercicio 17";
echo "\n";

$array = [];

$largo = readline("Introduce el límite del array: ");

for ($i = 0; $i < $largo; $i++) {
    echo "Introduce el elemento " . ($i + 1) . " del array: ";
    $array[$i] = readline();
}

function filtrarPares($array){
    $arrayPares = [];
    $cont = 0;
    for ($i = 0; $i < count($array); $i++) {
        if ($array[$i] % 2 === 0) {
            $arrayPares[$cont] = $array[$i];
            $cont++;
        }
    }
    return $arrayPares;
}

$arrayPares = filtrarPares($array);
foreach ($arrayPares as $valor) {
    echo $valor . " ";
}

//Ejercicio 18. Número primo
echo "\n\n";
echo "Ejercicio 18";
echo "\n";

$num = intval(readline("Introduce el número: "));

function esPrimo($num){
    if ($num <= 1) {
        return "No es primo.";
    }
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i === 0) {
            return "No es primo.";
        }
    }
    return "Es primo.";
}

echo esprimo($num);

//Ejercicio 19. Eliminar vocales
echo "\n\n";
echo "Ejercicio 19";
echo "\n";

$texto = readline("Introduce el texto para eliminar vocales: ");

function eliminarVocales($texto){
    $vocales = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];
    $resultado = "";

    for ($i = 0; $i < strlen($texto); $i++) {
        if (!in_array($texto[$i], $vocales)) {
            $resultado .= $texto[$i];
        }
    }
    return $resultado;
}

echo eliminarVocales($texto);

//Ejercicio 20. Factorial
echo "\n\n";
echo "Ejercicio 20";
echo "\n";

$num = intval(readline("Introduce el número: "));

function factorial($num){
    $fact = 1;
    for ($i = 2; $i <= $num; $i++) {
        $fact *= $i;
    }
    return $fact;
}

echo factorial($num);

//Ejercicio 21. Invertir cadena
echo "\n\n";
echo "Ejercicio 21";
echo "\n";

$texto = readline("Introduce el texto para invertir: ");

function invertirCadena($texto){
    $textoInvertido = "";
    for ($i = strlen($texto) - 1; $i >= 0; $i--) {
        $textoInvertido .= $texto[$i];
    }
    return $textoInvertido;
}

echo invertirCadena($texto);

//Ejercicio 22. Número perfecto
echo "\n\n";
echo "Ejercicio 22";
echo "\n";

$num = intval(readline("Introduce el número: "));

function esPerfecto($num){
    $sumaDivisores = 0;
    for ($i = 1; $i < $num; $i++) {
        if ($num % $i === 0) {
            $sumaDivisores += $i;
        }
    }
    if ($sumaDivisores === $num) {
        return true;
    } else {
        return false;
    }
}

echo (esPerfecto($num) ? 'true' : 'false');

//Ejercicio 23. Número Armstrong
echo "\n\n";
echo "Ejercicio 23";
echo "\n";

$num = intval(readline("Introduce el número: "));

function esArmstrong($num){
    $numStr = strval($num);
    $numCifras = strlen($numStr);
    $suma = 0;

    for ($i = 0; $i < $numCifras; $i++) {
        $cifra = intval($numStr[$i]);
        $suma += pow($cifra, $numCifras);
    }

    if ($suma === $num) {
        return "Es un número Armstrong.";
    } else {
        return "No es un número Armstrong.";
    }
}

echo esArmstrong($num);

//Ejercicio 24. Calculadora de descuentos con constantes
echo "\n\n";
echo "Ejercicio 24";
echo "\n";

const dto_estudiante = 15;
const dto_jubilado = 20;
const dto_vip = 25;

function calcularDto($num, $dto){
    $descuento = ($num * $dto) / 100;
    $total = $num - $descuento;

    return $total;
}

$num = intval(readline("Introduce la cifra para aplicar el descuento: "));

echo "¿Para quién es el descuento?\n\n1. Estudiante (15%)\n2. Jubilado (20%)\n3. VIP (25%)\n";

do{
    $cliente = intval(readline("> "));

    if($cliente < 0 || $cliente > 3) {
        echo "Selecciona una opción válida.\n";
    }

}while($cliente < 0 || $cliente > 3);

switch($cliente){
    case 1:
        echo "La cifra total con descuento de estudiante es: " . calcularDto($num, dto_estudiante);

        break;
    case 2:
        echo "La cifra total con descuento de jubilado es: " . calcularDto($num, dto_jubilado);

        break;
    case 3:
        echo "La cifra total con descuento VIP es: " . calcularDto($num, dto_vip);

        break;
}

//Ejercicio 25. Clasificador de notas con match
echo "\n\n";
echo "Ejercicio 25";
echo "\n";

$nota = intval(readline("Introduce la nota: "));

function calcularNota($nota){
    return match (true) {
        $nota >= 9 && $nota <= 10 => "Sobresaliente",
        $nota >= 7 && $nota <= 8 => "Notable",
        $nota >= 5 && $nota <= 6 => "Aprobado",
        $nota >= 0 && $nota <= 4 => "Suspenso",
        default => "Nota inválida",
    };
}

echo calcularNota($nota);

//Ejercicio 26. Validador de datos con operador null coalescing
echo "\n\n";
echo "Ejercicio 26";
echo "\n";

$datos = '';

$cliente = [
    'nombre' => null,
    'email' => null,
    'edad' => null,
    'ciudad' => null
];

foreach ($cliente as $key => &$value) {
    $dato = readline("Introduce " . $key. " (deja en blanco para omitir): ");
    if ($dato !== '') {
        $value = $dato;
    } else {
        $value = null;
    }
}
unset($value);

function validarDatos($cliente){
    $nombre = $cliente['nombre'] ?? 'Anónimo';
    $email = $cliente['email'] ?? 'sin-email@example.com';
    $edad = $cliente['edad'] ?? '18';
    $ciudad = $cliente['ciudad'] ?? 'Desconocida';

    return "Nombre: $nombre\nEmail: $email\nEdad: $edad\nCiudad: $ciudad\n";
}

echo validarDatos($cliente);
*/
//Ejercicio 27. Acceso seguro a propiedades con nullsafe operator
echo "\n\n";
echo "Ejercicio 27";
echo "\n";