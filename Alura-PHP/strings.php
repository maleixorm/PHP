<?php

$nome = "Marcos Aleixo";

$eDaMinhaFamilia = str_contains($nome, "Aleixo");

if ($eDaMinhaFamilia) {
    echo "$nome é da minha familia." . PHP_EOL;
} else {
    echo "$nome não é da minha família." . PHP_EOL;
}