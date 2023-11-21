<?php

function saqueConta(array $conta, float $valorASacar) : array {
    if ($valorASacar > $conta['saldo']) {
        exibeMensagem("Você não pode sacar");
    } else {
        $conta['saldo'] -= $valorASacar;
    }
    return $conta;
}

function depositoConta(array $conta, float $valorADepositar) : array {
    if ($valorADepositar > 0 ) {
        $conta['saldo'] += $valorADepositar;
    } else {
        exibeMensagem("Você não tem dinheiro para depositar");
    }
    return $conta;
}

function exibeMensagem (string $mensagem) : void {
    echo $mensagem . PHP_EOL;
}

function titularComLetrasMaiusculas (array &$conta) {
    $conta['titular'] = mb_strtoupper($conta['titular']);
}

function exibeConta(array $conta) {
    ['titular' => $titular, 'saldo' => $saldo] = $conta;
    echo "<li>Titular: $titular. Saldo: $saldo.</li>}";
}