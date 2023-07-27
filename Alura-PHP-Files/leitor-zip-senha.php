<?php
$contexto = stream_context_create([
    'zip' => [
        'password' => '123456'
    ]
]);
echo file_get_contents('zip://c:\Users\Usuario\Documents\GitHub\PHP\Alura-PHP-Files\arquivos.zip#lista-cursos.txt', false, $contexto);