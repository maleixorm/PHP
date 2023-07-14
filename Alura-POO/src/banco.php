<?php

require 'D:\Arquivo\Documents\Github\PHP\Alura-POO\src\conta.php';

$primeiraConta = new Conta('123.456.789-10', 'Marcos Aleixo');
var_dump($primeiraConta) . PHP_EOL;

// $primeiraConta->definirCpfTitular();
// $primeiraConta->definirNomeTitular();

$primeiraConta->depositar(1900);

echo $primeiraConta->recuperarSaldo() . "<br>";

$primeiraConta->sacar(400);

$segundaConta = new Conta('111.222.333-10', 'Vinicius Dias');

// $segundaConta->definirCpfTitular();
// $segundaConta->definirNomeTitular();

$segundaConta->depositar(1400);

echo $segundaConta->recuperarSaldo() . "<br>";

$segundaConta->sacar(1100);

$primeiraConta->transferir(1000, $segundaConta);

var_dump($primeiraConta);
var_dump($segundaConta);