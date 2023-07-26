<?php

$arquivo = fopen('C:\Users\Usuario\Documents\GitHub\PHP\Alura-PHP-Files\cursos-php.txt', 'a');
$curso = "\nDesign Patterns PHP III: Boas Práticas de Programação";
fwrite($arquivo, $curso);

fclose($arquivo);