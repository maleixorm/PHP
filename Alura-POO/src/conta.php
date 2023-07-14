<?php

class Conta {
    private string $cpfTitular;
    private string $nomeTitular;
    private float $saldo;
    private static int $numeroDeContas = 0;

    public function __construct(string $cpfTitular, string $nomeTitular) {
        $this->cpfTitular = $cpfTitular;
        $this->validaNomeTitular($nomeTitular);
        $this->nomeTitular = $nomeTitular;
        $this->saldo = 0;
        Conta::$numeroDeContas++;
    }

    public function sacar(float $valorASacar) : void {
        if ($valorASacar > $this->saldo) {
            echo 'Valor indisponível para saque!';
            return;
        }
        $this->saldo -= $valorASacar; 
    }

    public function depositar(float $valorADepositar) : void {
        if ($valorADepositar < 0) {
            echo 'O valor precisa ser positivo!';
            return;
        }
        $this->saldo += $valorADepositar; 
    }

    public function transferir(float $valorATransferir, Conta $contaDeDestino) : void {
        if ($valorATransferir > $this->saldo) {
            echo 'Saldo indisponível para tranferências!';
            return;
        }
        $this->sacar($valorATransferir);
        $contaDeDestino->depositar($valorATransferir);
    }

    public function recuperarSaldo() : float {
        return $this->saldo;
    }

    /* 
    public function definirCpfTitular(string $cpf) : void {
        $this->cpfTitular = $cpf;
    }
    */
    
    public function recuperarCpfTitular() : string {
        return $this->cpfTitular;
    }

    /*
    public function definirNomeTitular(string $nome) : void {
        $this->nomeTitular = $nome;
    }
    */

    public function recuperarNomeTitular() : string {
        return $this->nomeTitular;
    }

    private function validaNomeTitular(string $nomeTitular) {
        if (strlen($nomeTitular) < 5) {
            echo 'O nome do titular precisa de pelo menos 5 caracteres';
        }
    }

    public static function recuperaNumeroDeContas() : int {
        return Conta::$numeroDeContas;
    }
}