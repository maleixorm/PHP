<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = (string)filter_input(INPUT_POST, 'name');
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo 'E-mail válido<br>' . $email . '<br>';
    } else {
        echo 'E-mail inválido!<br>';
    }

    var_dump($name, $email);
}