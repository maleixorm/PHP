<?php

class Titular {
    private string $cpf;
    private string $nome;

    public function __construct(string $cpf, string $nome)
    {
       $this->cpf = $cpf;
       $this->validaNomeTitular($nome);
       $this->nome = $nome; 
    }

    public function recuperaCpf() : string
    {
        return $this->cpf;    
    }

    public function recuperaNome() : string
    {
        return $this->nome;    
    }

    private function validaNomeTitular(string $nomeTitular) {
        if (strlen($nomeTitular) < 5) {
            echo 'O nome do titular precisa de pelo menos 5 caracteres';
        }
    }
}