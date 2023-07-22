<?php

require_once './autoload.php';

use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Funcionario\Diretor;
use Alura\Banco\Service\Autenticador;

$autenticador = new Autenticador();

$umDiretor = new Diretor(
    'Marcos',
    new CPF('234.345.456-67'),
    7000
);

$autenticador->tentaLogin($umDiretor, '4321');