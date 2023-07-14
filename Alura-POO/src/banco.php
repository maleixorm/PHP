<?php

require 'D:\Arquivo\Documents\Github\PHP\Alura-POO\src\conta.php';

$primeiraConta = new Conta();

$primeiraConta->definirCpfTitular('123.456.789-10');
$primeiraConta->definirNomeTitular('Marcos Aleixo');

$primeiraConta->depositar(1900);

echo $primeiraConta->recuperarSaldo() . "<br>";

$primeiraConta->sacar(400);

$segundaConta = new Conta();

$segundaConta->definirCpfTitular('111.222.333-10');
$segundaConta->definirNomeTitular('Vinicius Dias');

$segundaConta->depositar(1400);

echo $segundaConta->recuperarSaldo() . "<br>";

$segundaConta->sacar(1100);

$primeiraConta->transferir(1000, $segundaConta);

var_dump($primeiraConta);
var_dump($segundaConta);