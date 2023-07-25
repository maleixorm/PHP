<?php

function pulaLinha() {
    echo '<br>';
}

function funcao1()
{
    echo 'Entrei na função 1' . pulaLinha();
    try {
        funcao2();
    } catch (Throwable $problema) {
        echo $problema->getMessage() . pulaLinha();
        echo $problema->getLine() . pulaLinha();
        echo $problema->getTraceAsString() . pulaLinha();
    }
    
    echo 'Saindo da função 1' . pulaLinha();
}

function funcao2()
{
    echo 'Entrei na função 2' . pulaLinha();

    intdiv(2,0);
    throw new BadFunctionCallException("Essa é a mensagem de exception!");    

    echo 'Saindo da função 2' . pulaLinha();
}

echo 'Iniciando o programa principal' . pulaLinha();
funcao1();
echo 'Finalizando o programa principal' . pulaLinha();
