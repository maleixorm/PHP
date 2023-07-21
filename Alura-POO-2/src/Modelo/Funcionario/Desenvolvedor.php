<?php

namespace Alura\Banco\Modelo\Funcionario;

use Alura\Banco\Modelo\Funcionario\Funcionario;

class Desenvolvedor extends Funcionario
{
    public function sobeDeNivel()
    {
        return $this->recebeAumento($this->recuperaSalario() * 0.5);
    }

    public function calculaBonificacao(): float
    {
        return 500.00;
    }
}