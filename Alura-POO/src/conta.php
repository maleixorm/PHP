<?php

class Conta {
    private string $cpfTitular;
    private string $nomeTitular;
    private float $saldo = 0;

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

    public function definirCpfTitular(string $cpf) : void {
        $this->cpfTitular = $cpf;
    }
    
    public function recuperarCpfTitular() : string {
        return $this->cpfTitular;
    }

    public function definirNomeTitular(string $nome) : void {
        $this->nomeTitular = $nome;
    }

    public function recuperarNomeTitular() : string {
        return $this->nomeTitular;
    }
}