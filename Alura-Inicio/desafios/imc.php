<?php

$peso = 142;
$altura = 1.67;
$imc = $peso / $altura ** 2;
$rimc = round($imc, 2);

echo "Seu IMC é: $rimc.";

If ($imc<18.5){
    echo "Você está abaixo do peso recomendado!";
} elseif ($imc<25) {
    echo "Você está dentro do peso recomendado!";
} else {
    echo "Você está acima do peso recomendado!";
}