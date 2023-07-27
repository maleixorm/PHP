<?php

$cursos = fopen('zip://C:\Users\Usuario\Documents\GitHub\PHP\Alura-PHP-Files\arquivos.zip#cursos-php.txt', 'r');

stream_copy_to_stream($cursos, STDOUT);