<?php

$texto = 'texto com qualquer coisa seu fdp vagabundo safado do caralho';

$textoAlt = str_replace(
    ['fdp', 'vagabundo', 'safado', 'caralho'],
    '***',
    $texto
);

echo $textoAlt . '<br><br>';

echo strtr($texto, 'a', '@') . '<br><br>';