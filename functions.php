<?php

function teste($name) {
    return 'Olá, meu nome é ' . $name;
}

function teste2($callback) 
{
    if (is_callable($callback)) {
        return $callback('Marcos');
    }
}

echo teste2('teste');