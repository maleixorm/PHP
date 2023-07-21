<?php

require_once './autoload.php';

use Alura\Banco\Service\ControladorDeBonificacoes;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Funcionario\{Desenvolvedor, Gerente, Diretor, EditorVideo};

$umFuncionario = new Desenvolvedor(
    'Vinicius Dias',
    new CPF('123.456.789-10'),
    1000
);

$umaFuncionaria = new Gerente(
    'Patrícia',
    new CPF('987.654.321-10'),
    3000
);

$umDiretor = new Diretor(
    'Ana',
    new CPF('987.654.321-12'),
    5000
);

$umEditor = new EditorVideo(
    'Paulo',
    new CPF('456.987.231-10'),
    1500
);

$controlador = new ControladorDeBonificacoes();
$controlador->adicionaBonificacaoDe($umFuncionario);
$controlador->adicionaBonificacaoDe($umaFuncionaria);
$controlador->adicionaBonificacaoDe($umDiretor);
$controlador->adicionaBonificacaoDe($umEditor);

echo $controlador->recuperaTotal();