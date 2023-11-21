<?php

$conta1 = [
    'titular' => 'Marcos',
    'saldo' => 10200
];

$conta2 = [
    'titular' => 'Maria',
    'saldo' => 1000
];

$conta3 = [
    'titular' => 'Marta',
    'saldo' => 300
];


$contasCorrentes = [$conta1, $conta2, $conta3];

for ($i=0; $i < count($contasCorrentes); $i++) { 
    echo $contasCorrentes[$i]['titular'] . PHP_EOL;
}