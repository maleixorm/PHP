<?php

function pulaLinha() {
    echo "<br>";
    echo "<br>";
}

function mostra($frase) {
    echo $frase;
    pulaLinha();
}

$dados = [
    "nome" => "Marcos",
    "nota" => 10,
    "idade" => 35
];

extract($dados);

mostra($nome);
mostra($nota);
mostra($idade);

$dados2 = compact("nome", "nota", "idade");
var_dump($dados2);