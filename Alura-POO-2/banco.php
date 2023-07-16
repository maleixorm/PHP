<?php

require_once 'src/Conta.php';
require_once 'src/Endereco.php';
require_once 'src/Titular.php';
require_once 'src/CPF.php';

$endereco = new Endereco('Cidade', 'Bairro', 'Minha Rua', '71A');
$vinicius = new Titular(new CPF('123.456.789-10'), 'Vinicius Dias', $endereco);
$primeiraConta = new Conta($vinicius);
$primeiraConta->deposita(500);
$primeiraConta->saca(300); // isso é ok

echo $primeiraConta->recuperaNomeTitular() . '<br>';
echo $primeiraConta->recuperaCpfTitular() . '<br>';
echo $primeiraConta->recuperaSaldo() . '<br>';

$patricia = new Titular(new CPF('698.549.548-10'), 'Patricia', $endereco);
$segundaConta = new Conta($patricia);
var_dump($segundaConta);
echo '<br>';

$outroEndereco = new Endereco('Cidade Nova', 'Novo', 'Rua Nova', '71B');
$abignail = new Titular(new CPF('123.654.789-01'), 'Abignail', $outroEndereco);
$outra = new Conta($abignail);
unset($segundaConta);
echo Conta::recuperaNumeroDeContas();
