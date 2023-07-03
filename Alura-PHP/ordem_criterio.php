<?php

function pulaLinha() {
    echo "<br>";
    echo "<br>";
}

function ordenaNotas(array $nota1, array $nota2): int {
    if ($nota1["nota"] > $nota2["nota"]) {
        return -1;
    } else if ($nota2["nota"] > $nota1["nota"]) {
        return 1;
    } else {
        return 0;
    }
    
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