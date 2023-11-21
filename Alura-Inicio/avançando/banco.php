<?php

require_once "funcoes.php";

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

$contasCorrentes['123.456.789-10'] = saqueConta($contasCorrentes['123.456.789-10'], 500);
$contasCorrentes['123.456.789-11'] = saqueConta($contasCorrentes['123.456.789-11'], 100);

$contasCorrentes['123.256.789-12'] = depositoConta($contasCorrentes['123.256.789-12'], 200);

titularComLetrasMaiusculas($contasCorrentes['123.456.789-10']);

unset($contasCorrentes['123.456.789-11']);

foreach ($contasCorrentes as $cpf => $conta) {
    ['titular' => $titular, 'saldo' => $saldo] = $conta;
    exibeMensagem(
        "$cpf $titular $saldo"
    );
}