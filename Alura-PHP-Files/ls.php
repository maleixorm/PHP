<?php

$diretorioAtual = dir('C:\Users\Usuario\Documents\GitHub\PHP\Alura-PHP-Files');
echo $diretorioAtual->path;
while ($arquivo = $diretorioAtual->read()) {
    echo $arquivo . "<br>";
}