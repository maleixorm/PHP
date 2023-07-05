<?php

$url = "https://alura.com.br";

if (str_starts_with($url, "https")) {
    echo "É uma URL segura.";
} else {
    echo "Não é uma URL segura.";
}

echo "<br><br>";

if (str_ends_with($url, ".br")) {
    echo "É um Domínio nacional.";
} else {
    echo "É um Domínio estrangeiro.";
}