<?php
class Conta {
    private string $cpfTitular;
    private string $nomeTitular;
    private float $saldo;
    private static $numeroDeContas = 0;

    
    public function __construct(string $cpfTitular, string $nomeTitular) {
        $this->cpfTitular = $cpfTitular;
        $this->validaNomeTitular($nomeTitular);
        $this->saldo = 0;
        self::$numeroDeContas++;
    }

    public function __destruct() {
        if(self::$numeroDeContas > 2) {
            self::$numeroDeContas--;
        }
    }

    private function validaNomeTitular (string $nomeTitular){ 
        if(strlen($nomeTitular) < 5) {
            echo "Nome precisa ter no minimo 5 caracteres";
        }
    }

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

    public static function recuperaNumeroDeContas(): int {
        return self::$numeroDeContas;
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