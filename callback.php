<?php

function teste($name) {
    return 'Olá, meu nome é ' . $name;
}

call_user_func('teste', 'Marcos');