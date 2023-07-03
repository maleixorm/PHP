<?php

function pulaLinha() {
    echo "<br>";
    echo "<br>";
}

function ordenaNotas(array $nota1, array $nota2): int {
    return $nota1["nota"] <=> $nota2["nota"];
}

$notas = [
    [
        "aluno" => "Maria",
        "nota" => 10
    ],
    [
        "aluno" => "José",
        "nota" => 6
    ],
    [
        "aluno" => "Ana",
        "nota" => 9
    ]
];

usort(array: $notas, callback:"ordenaNotas");
var_dump($notas);