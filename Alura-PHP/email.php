<?php

$usuario = "Marcos";

function geraEmail($nome):void {
    $conteudoEmail = <<<FINAL
    Olá $nome!

    Estamos entrando em contato para
    {motivo do contato}

    {assinatura}
    FINAL;

    echo $conteudoEmail;
}

geraEmail($usuario);

// heredoc -> equivalente a aspas duplas
// nowdoc -> equivalente a aspas simples