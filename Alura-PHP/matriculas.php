<?php

function pulaLinha() {
    echo "<br>";
    echo "<br>";
}

$alunosAnoAnterior = [
    "Ana",
    "Vinicius",
    "Roberto",
    "Maria",
    "João",
    "Marcos"
];

$novosAlunos = [
    "Patricia",
    "Helena",
    "Nikolas",
    "Luiz",
    "Henrique"
];

$todosOsAlunos = array_merge($alunosAnoAnterior, $novosAlunos);
var_dump($todosOsAlunos);
pulaLinha();

