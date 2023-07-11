<?php

require 'D:\Arquivo\Documents\Github\PHP\Alura-POO\src\conta.php';

$primeiraConta = new Conta();

$primeiraConta->cpfTitular = '123.456.789-10';
$primeiraConta->nomeTitular = 'Marcos Aleixo';
$primeiraConta->saldo = 500;

var_dump($primeiraConta);

$segundaConta = new Conta();

$segundaConta->cpfTitular = '111.222.333-10';
$segundaConta->nomeTitular = 'Vinicius Dias';
$segundaConta->saldo = 1200;

var_dump($segundaConta);