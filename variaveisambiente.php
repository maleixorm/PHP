<?php

require './vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

var_dump($_ENV['USER']);

echo '<br><br>';

var_dump($_SERVER);