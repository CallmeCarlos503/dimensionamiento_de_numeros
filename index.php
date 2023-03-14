<?php

$longitud = 100;
$array_numeros = array();

// Llenamos el array con números enteros aleatorios entre -100 y 100
for ($i = 0; $i < $longitud; $i++) {
    $array_numeros[] = rand(-100, 100);
}

// Calculamos el promedio de los valores almacenados en el array
$promedio = array_sum($array_numeros) / $longitud;

// Inicializamos los arrays vacíos para almacenar los números positivos, negativos, mayores y menores al promedio
$array_positivos = array();
$array_negativos = array();
$array_mayores_promedio = array();
$array_menores_promedio = array();

// Iteramos sobre el array original para separar los números en los arrays correspondientes
foreach ($array_numeros as $numero) {
    if ($numero > 0) {
        $array_positivos[] = $numero;
    } elseif ($numero < 0) {
        $array_negativos[] = $numero;
    }

    if ($numero > $promedio) {
        $array_mayores_promedio[] = $numero;
    } elseif ($numero < $promedio) {
        $array_menores_promedio[] = $numero;
    }
}

// Imprimimos los arrays resultantes
echo "Promedio: " . $promedio . "<br>";
echo "Cantidad de numeros positivos: " . count($array_positivos) . "<br>";
echo "Array de números positivos: " . implode(", ", $array_positivos) . "<br>";
echo "Cantidad de numeros negativos: " . count($array_negativos) . "<br>";
echo "Array de números negativos: " . implode(", ", $array_negativos) . "<br>";
echo "Cantidad de numeros mayores al promedio: " . count($array_mayores_promedio) . "<br>";
echo "Array de números mayores al promedio: " . implode(", ", $array_mayores_promedio) . "<br>";
echo "Cantidad de numeros menores al promedio: " . count($array_menores_promedio) . "<br>";
echo "Array de números menores al promedio: " . implode(", ", $array_menores_promedio) . "<br>";
?>