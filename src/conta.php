<?php
class Conta {
    private string $cpfTitular;
    private float $saldo = 0;
    private string $nomeTitular;

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

    public function adicionarNome(string $nome) {
        $this->nomeTitular = $nome;
    }

    public function adicionarCpf(string $cpf) {
        $this->cpfTitular = $cpf;
    }

    public function recuperarSaldo(): float {
        return $this->saldo;
    }

    public function recuperarCpfTitular(): string {
        return $this->cpfTitular;
    }

    public function recuperarNomeTitular(): string { 
        return $this->nomeTitular;
    }
}