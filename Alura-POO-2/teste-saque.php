<?php

use Alura\Banco\Modelo\Conta\{ContaPoupanca, ContaCorrente, Titular};
use Alura\Banco\Modelo\{CPF, Endereco};

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