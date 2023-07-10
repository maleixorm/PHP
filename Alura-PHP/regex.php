<?php

function pulaLinha() {
    echo "<br>";
    echo "<br>";
}

$telefones = [
    '(35) 9 9999-9999',
    '(35) 9 8888-8888',
    '(35) 9 9777-7777'
];

foreach ($telefones as $telefone) {
    $regex = '/^\(([0-9]{2})\) (9? [8-9]{1}[0-9]{3}-[0-9]{4})$/';
    $telefoneValido = preg_match(
        $regex, $telefone
    );
    if ($telefoneValido) {
        echo 'Telefone válido';
        pulaLinha();
    } else {
        echo 'Telefone inválido';
        pulaLinha();
    }

    echo preg_replace(
        $regex,
        '(nn) \2',
        $telefone
    );
    pulaLinha();
    
}