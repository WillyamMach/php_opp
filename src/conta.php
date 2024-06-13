<?php
class Conta {
    private $titular;
    private float $saldo;
    private static $numeroDeContas = 0;

    
    public function __construct(Titular $titular) {
        $this->titular = $titular;
        $this->saldo = 0;
        self::$numeroDeContas++;
    }

    public function __destruct() {
        if(self::$numeroDeContas > 2) {
            self::$numeroDeContas--;
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

    public function recuperaNomeTitular(): string {
        return $this.titular->recuperaNome();
    }

    public function recuperaCpfTitular(): string {
        return $this.titular->recuperaCpf();
    }

}