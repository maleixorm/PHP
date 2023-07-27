<?php

require 'c:\Users\Usuario\Documents\GitHub\PHP\Alura-PHP-Files\MeuFiltro.php';

$arquivoCursos = fopen('c:\Users\Usuario\Documents\GitHub\PHP\Alura-PHP-Files\lista-cursos.txt', 'r');

stream_filter_register('alura.partes', MeuFiltro::class);
stream_filter_append($arquivoCursos, 'alura.partes');

echo fread($arquivoCursos, filesize('c:\Users\Usuario\Documents\GitHub\PHP\Alura-PHP-Files\lista-cursos.txt'));