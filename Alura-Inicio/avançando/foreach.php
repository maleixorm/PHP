<?php

$contasCorrentes = [
    '123.456.789-10' => [
        'titular' => 'Marcos',
        'saldo' => 10200
    ], 
    '123.456.789-11' => [
        'titular' => 'Maria',
        'saldo' => 1000
    ], 
    '123.256.789-12' => [
        'titular' => 'Marta',
        'saldo' => 300
    ]
];

$contasCorrentes['123.258.852-12'] = [
    'titular' => 'Cláudia',
    'saldo' => 5000
];

foreach ($contasCorrentes as $cpf => $conta) {
    echo $cpf . PHP_EOL;
}