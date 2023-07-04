<?php

function pulaLinha() {
    echo "<br>";
    echo "<br>";
}

$notasBimestre1 = [
    "Ana" => 10,
    "Vinicius" => 8,
    "Roberto" => 7,
    "Maria" => 6,
    "João" => 3,
    "Marcos" => 8
];

$notasBimestre2 = [
    "Ana" => 10,
    "Vinicius" => 8,
    "Maria" => 6,
    "João" => 9,
    "Marcos" => 7
];

// Retorna um elemento cujo valor exista no primeiro e não exista nos outros
var_dump(array_diff($notasBimestre1, $notasBimestre2));
pulaLinha();

// Retorna um elemento que a chave exista no primeiro e não exista nos outros
var_dump(array_diff_key($notasBimestre1, $notasBimestre2));
pulaLinha();

// Retorna chave e valor alterados entre os vetores
var_dump(array_diff_assoc($notasBimestre1, $notasBimestre2));
pulaLinha();