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

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contas Correntes</title>
</head>
<body>
    <h1>Contas Correntes</h1>
    <hr>
    <dl>
        <?php
        foreach ($contasCorrentes as $cpf => $conta) { ?>
            <dt>
                <h3>
                    <?= $conta['titular']; ?> - <?= $cpf; ?>
                </h3>
            </dt>
            <dd>
                Saldo: <?= $conta['saldo']; ?>
            </dd>
        <?php } ?>
    </dl>
</body>
</html>