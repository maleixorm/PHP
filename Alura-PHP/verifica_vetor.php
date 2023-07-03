<?php

function pulaLinha() {
    echo "<br>";
    echo "<br>";
}

$notas = [
    "Ana" => 10,
    "Vinicius" => 8,
    "Maria" => 6,
    "João" => 4,
    "Marcos" => 7
];

$notas2 = [
    10,
    8,
    6,
    9,
    7,
    3,
    4
];

// Verifica se é um vetor
if (is_array($notas)) {
    echo "Sim é um vetor." . PHP_EOL;
}

// Verifica se o vetor é sequencial
pulaLinha();
var_dump(array_is_list($notas));

pulaLinha();
var_dump(array_is_list($notas2));

// Verifica se a chave existe no vetor
pulaLinha();
var_dump(array_key_exists("Ana", $notas));

// Verifica se a chave existe e se o conteudo é nulo
pulaLinha();
var_dump(isset($notas["Marcos"]));

// Verifica se o valor buscado dentro do vetor existe
pulaLinha();
var_dump(in_array(10, $notas));

// Verifica se o valor buscado dentro do vetor existe, checando tambem o tipo da variável
pulaLinha();
var_dump(in_array(10, $notas, true));

// busca a chave correspondente ao valor procurado no vetor
pulaLinha();
echo array_search(7, $notas);