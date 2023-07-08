<?php

function pulaLinha() {
    echo "<br>";
    echo "<br>";
}

$email = 'marcos@alura.com.br';
$senha = "123456";

echo mb_strlen($senha);
pulaLinha();

if (mb_strlen($senha) < 8) {
    echo 'Senha de baixa segurança!';
    pulaLinha();
}

$posicaoDoArroba = strpos($email, "@");

$usuario = substr($email, 0, $posicaoDoArroba);
echo $usuario;
pulaLinha();

echo mb_strtoupper($usuario);
pulaLinha();

echo strtolower($usuario);
pulaLinha();

echo substr($email, $posicaoDoArroba + 1);
pulaLinha();



