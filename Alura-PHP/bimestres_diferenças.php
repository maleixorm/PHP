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

$alunosFaltantes = array_diff_key($notasBimestre1, $notasBimestre2);
var_dump(array_keys($alunosFaltantes));
pulaLinha();
var_dump(array_values($alunosFaltantes));
pulaLinha();
$nomeAlunos = array_keys($alunosFaltantes);
$notasAlunos = array_values($alunosFaltantes);

// combina o conteúdo dos vetores usando como chave e valor respectivamente
var_dump(array_combine($nomeAlunos, $notasAlunos));
pulaLinha();

// Inverte a chave com o valor do vetor
var_dump(array_flip($alunosFaltantes));