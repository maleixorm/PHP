<?php

function pulaLinha() {
    echo "<br>";
    echo "<br>";
}

$anoNascimento = '1988';

$idade = 2023 - $anoNascimento;

echo $idade;
pulaLinha();

if ($anoNascimento == 1988) {
    echo 'Sim!';
    pulaLinha();
} else {
    echo 'Não!';
    pulaLinha();
}