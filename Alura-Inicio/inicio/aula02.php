<?php

$idade = 18;
$numeroDePessoas = 1;

echo "Você só pode entrar se tiver 18 anos ou mais." . PHP_EOL;

if ($idade >= 18){
    echo "Você tem $idade anos." . PHP_EOL;
    echo "Pode entrar!";
} else if($idade >= 16 && $numeroDePessoas > 1){
    echo "Você tem $idade anos, mas está acompanhado." .PHP_EOL;
    echo "Pode entrar!";
} else {
    echo "Você tem $idade anos." . PHP_EOL;
    echo "Você não pode entrar!";
}