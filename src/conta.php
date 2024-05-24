<?php
class Conta {
    public string $cpfTitular;
    public float $saldo = 0;
    public string $nomeTitular;

    public function sacar(float $valorSacar): void {
        if ($valorSacar > $this->saldo) {
            echo "Saldo Indisponível";
            return;
        } 
        $this->saldo -= $valorSacar;

    }
    
    public function depositar(float $saldoDepositar) {
        if ($saldoDepositar > 0) {
            $this->saldo += $saldoDepositar;
            return;
        } 
        echo "Saldo Insuficiente!";
    }

    public function transferir(float $valorTransferir, $contaDestino): void {
        if ($valorTransferir > $this->saldo) {
            echo "Saldo Indisponível";
            return;
        } 

        $this->sacar($valorTransferir);
        $contaDestino->depositar($valorTransferir);     
    }
}