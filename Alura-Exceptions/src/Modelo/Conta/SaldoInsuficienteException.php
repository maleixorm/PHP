<?php

namespace Alura\Banco\Modelo\Conta;

use DomainException;

class SaldoInsuficienteException extends DomainException
{
    public function __construct(float $valorSaque, float $saqueAtual)
    {
        $mensagem = "Você tentou sacar $valorSaque porém, seu saldo é $saqueAtual.";
        parent::__construct($mensagem);
    }
}