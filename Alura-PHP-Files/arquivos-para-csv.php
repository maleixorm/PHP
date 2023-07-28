<?php

$meusCursos = file('C:\Users\Usuario\Documents\GitHub\PHP\Alura-PHP-Files\lista-cursos.txt');
$outrosCursos = file('C:\Users\Usuario\Documents\GitHub\PHP\Alura-PHP-Files\cursos-php.txt');

$arquivoCsv = fopen('C:\Users\Usuario\Documents\GitHub\PHP\Alura-PHP-Files\cursos.csv', 'w');

foreach ($meusCursos as $curso) {
    $linha = [trim(utf8_decode($curso)), 'Sim'];
    fputcsv($arquivoCsv, $linha, ';');
}

foreach ($outrosCursos as $curso) {
    $linha = [trim(utf8_decode($curso)), 'Não'];
    fputcsv($arquivoCsv, $linha, ';');
}

fclose($arquivoCsv);