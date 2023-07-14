<?php

class Conta {
    private Titular $titular;
    private float $saldo;
    private static int $numeroDeContas = 0;

    public function __construct(Titular $titular) 
    {
        $this->titular = $titular;
        $this->saldo = 0;
        Conta::$numeroDeContas++;
    }

    public function __destruct()
    {
        self::$numeroDeContas--;
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

    public function recuperarCpfTitular(): string
    {
        return $this->titular->recuperaCpf();
    }

    public function recuperarNomeTitular(): string
    {
        return $this->titular->recuperaNome();
    }

    public static function recuperaNumeroDeContas() : int {
        return Conta::$numeroDeContas;
    }
}