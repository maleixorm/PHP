<?php

session_start();

echo session_id();

require "./session.php";

$_SESSION['name'] = 'Marcos';
$_SESSION['person'] = ['name'=> 'André', 'age' => 37];