<?php

if (isset($_SESSION['name'])) {
    echo 'Sessão Existe<br>' . $_SESSION['name'];
} else {
    echo 'Sessão não existe';
}

unset($_SESSION['name']);