<?php

function pulaLinha() {
    echo "<br>";
    echo "<br>";
}

$notas = [
    10,
    8,
    6,
    9,
    7,
    3,
    4
];

sort(array:$notas);
var_dump($notas);

pulaLinha();

rsort(array:$notas);
var_dump($notas);

// Utilize asort e arsort para ordenar os valores do array associativo.

// ksort e krsort para ordenar pelas chaves do array associativo.