<?php

use Alura\Banco\Modelo\Conta\Conta;
use Alura\Banco\Modelo\Conta\ContaPoupanca;
use Alura\Banco\Modelo\Conta\ContaCorrente;
use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Endereco;

require_once './autoload.php';

$conta = new ContaPoupanca(
    new Titular(
        new CPF('123.456.789-10'),
        'Marcos Aleixo',
        new Endereco('São Paulo', 'Centro', 'Rua Jacobina', '37')
    )
);

$conta->deposita(500);
$conta->saca(100);

echo $conta->recuperaSaldo();