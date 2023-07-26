<?php

function pulaLinha () {
    echo "<br>";
}

$arquivo = fopen('C:\Users\Usuario\Documents\GitHub\PHP\Alura-PHP-Files\lista-cursos.txt', 'r');

$tamanhoArquivo = filesize('C:\Users\Usuario\Documents\GitHub\PHP\Alura-PHP-Files\lista-cursos.txt');
$cursos = fread($arquivo, $tamanhoArquivo);

echo $cursos . pulaLinha();

fclose($arquivo);