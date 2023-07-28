<?php

$arquivoCursos = new SplFileObject('c:\Users\Usuario\Documents\GitHub\PHP\Alura-PHP-Files\cursos.csv');

while (!$arquivoCursos->eof()) {
    $linha = $arquivoCursos->fgetcsv(';');

    echo utf8_encode($linha[0]) . PHP_EOL;
}

$date = new DateTime();
$date->setTimestamp($arquivoCursos->getCTime());

echo $date->format('d/m/Y') . PHP_EOL;