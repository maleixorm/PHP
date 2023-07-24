<?php

function pulaLinha() {
    echo '<br>';
}

function funcao1()
{
    echo 'Entrei na função 1' . pulaLinha();
    try {
        funcao2();
    } catch (RuntimeException | DivisionByZeroError $erro) {
        echo $erro->getMessage() . pulaLinha();
        echo $erro->getLine() . pulaLinha();
        echo $erro->getTraceAsString() . pulaLinha();
    }
    
    echo 'Saindo da função 1' . pulaLinha();
}

function funcao2()
{
    echo 'Entrei na função 2' . pulaLinha();

    $exception = new RuntimeException("Essa é a mensagem de exception!");
    throw $exception;
    

    echo 'Saindo da função 2' . pulaLinha();
}

echo 'Iniciando o programa principal' . pulaLinha();
funcao1();
echo 'Finalizando o programa principal' . pulaLinha();
