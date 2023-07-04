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

$todosOsAlunos = [...$alunosAnoAnterior, "Sarah",...$novosAlunos];

// adiciona varios elemantos ao vetor
array_push($todosOsAlunos, "Alice", "Bob", "Charlie");

// adiciona um elemento único ao vetor
$todosOsAlunos[] = "Carlos";

// adiciona um elemento no inicio do vetor
array_unshift($todosOsAlunos, "Izabella");

// remove o primeiro elemento do vetor
array_shift($todosOsAlunos);

// remove o último elemento do vetor
array_pop($todosOsAlunos);

var_dump($todosOsAlunos);
pulaLinha();

