<?php

function pulaLinha() {
    echo "<br>";
    echo "<br>";
}

$string = '1 2 3 4';

var_dump(explode(' ', $string, 2));
pulaLinha();

$email = ' marcos@alura.com.br ';
echo $email;
pulaLinha();

echo trim($email, ' ');
pulaLinha();