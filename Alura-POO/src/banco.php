<?php

require_once 'D:\Arquivo\Documents\Github\PHP\Alura-POO\src\conta.php';
require_once 'D:\Arquivo\Documents\Github\PHP\Alura-POO\src\titular.php';

$marcos = new Titular('123.456.789-10', 'Marcos Aleixo');
$primeiraConta = new Conta($marcos);
$primeiraConta->depositar(1900);
$primeiraConta->sacar(400);

echo $primeiraConta->recuperarCpfTitular();
echo '<br>';
echo $primeiraConta->recuperarNomeTitular();
echo '<br>';
echo $primeiraConta->recuperarSaldo();
echo '<br>';

$vinicius = new Titular('111.222.333-10', 'Vinicius Dias');
$segundaConta = new Conta($vinicius);
$segundaConta->depositar(1400);
$segundaConta->sacar(1100);
echo $segundaConta->recuperarSaldo() . "<br>";
$primeiraConta->transferir(900, $segundaConta);

$juliana = new Titular('987.654.321-99', 'Juliana Rosa');
$outraConta = new Conta($juliana);
$segundaConta->transferir(600, $outraConta);

var_dump($primeiraConta);
echo '<br>';

var_dump($segundaConta);
echo '<br>';

var_dump($outraConta);
echo '<br>';

echo 'Numero de contas: ' . Conta::recuperaNumeroDeContas();
echo '<br>';

unset($outraConta);
echo 'Numero de contas: ' . Conta::recuperaNumeroDeContas();