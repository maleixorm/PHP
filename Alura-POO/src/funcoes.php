<?php

function criarConta(string $cpf, string $nomeDoTitular, float $saldo): array {
    return [
        $cpf => [
            'titular' => $nomeDoTitular,
            'saldo' => $saldo
        ]
        ];
}