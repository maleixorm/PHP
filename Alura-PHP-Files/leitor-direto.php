<?php

$cursos = file_get_contents('C:\Users\Usuario\Documents\GitHub\PHP\Alura-PHP-Files\lista-cursos.txt');

echo $cursos;

$cursos2 = file('C:\Users\Usuario\Documents\GitHub\PHP\Alura-PHP-Files\lista-cursos.txt');

var_dump($cursos2);