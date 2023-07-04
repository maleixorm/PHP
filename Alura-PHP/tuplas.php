<?php

function pulaLinha() {
    echo "<br>";
    echo "<br>";
}

function mostra($frase) {
    echo $frase;
    pulaLinha();
}

$dados = ["Marcos", 10, 35];
list($nome, $nota, $idade) = $dados;

mostra($nome);
mostra($nota);
mostra($idade);