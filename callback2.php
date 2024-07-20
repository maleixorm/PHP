<?php

class User
{
    function teste($name) {
        return 'Olá, meu nome é ' . $name;
    }
}

$user = new User;

echo call_user_func([$user, 'teste'], 'Marcos');