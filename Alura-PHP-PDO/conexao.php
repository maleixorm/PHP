<?php

require_once 'vendor/autoload.php';

use Alura\Pdo\Infrastructure\Repository\PdoStudentRepository;

$connection = new PDO('mysql:host=localhost;dbname=banco',
               'user',
               'passwd'
);
$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

echo "Banco conectado!<br><br>";

$repository = new PdoStudentRepository($connection);
$studentList = $repository->allStudents();

var_dump($studentList);