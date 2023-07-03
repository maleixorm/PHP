<?php

function pulaLinha() {
    echo "<br>";
    echo "<br>";
}

$notas = [
    10,
    8,
    9,
    7
];

$notasOrdenadas = $notas;
sort(array: $notasOrdenadas);

echo "Desordenadas: ";
var_dump($notas);

pulaLinha();

echo "Ordenadas: ";
var_dump($notasOrdenadas);