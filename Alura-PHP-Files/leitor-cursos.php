<?php

function pulaLinha () {
    echo "<br>";
}

$arquivo = fopen('C:\Users\Usuario\Documents\GitHub\PHP\Alura-PHP-Files\lista-cursos.txt', 'r');

while (!feof($arquivo)) {
    $curso = fgets($arquivo);
    echo $curso . pulaLinha();
}

fclose($arquivo);