<?php
/* 
require_once 'src/Modelo/Conta/Conta.php';
require_once 'src/Modelo/Conta/Titular.php';
require_once 'src/Modelo/CPF.php';
require_once 'src/Modelo/Endereco.php';
require_once 'src/Modelo/Funcionario.php';
require_once 'src/Modelo/Pessoa.php';
*/

// Autoloader de arquivos iniciais


spl_autoload_register(function (string $nomeCompletoDaClasse) {
    $caminhoDoArquivo = str_replace('Alura\\Banco', 'src', $nomeCompletoDaClasse);
    $caminhoDoArquivo = str_replace('\\', DIRECTORY_SEPARATOR, $caminhoDoArquivo);
    $caminhoDoArquivo .= '.php';

    if (file_exists($caminhoDoArquivo)) {
        require_once $caminhoDoArquivo;
    }
});
 