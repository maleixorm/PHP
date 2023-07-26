<?php

use Alura\Banco\Modelo\Conta\ContaCorrente;
use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Endereco;

require_once './autoload.php';

$contaCorrente = new ContaCorrente(
    new Titular(
        new CPF('123.456.789-10'),
        "Marcos Aleixo",
        new Endereco("Cidade", "Bairro", "Rua Projetada", "10")
    )
);

try {
    $contaCorrente->deposita(-100);
} catch (InvalidArgumentException $exception) {
    echo "O valor a ser depositado precisa ser positivo.";
}
