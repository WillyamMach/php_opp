<?php 
class Cpf {
    private $cpf;

    public function __construct(string $cpf) {
        $this->cpf = $cpf;
    }

    public function recuperaNumero() {
        return $this->cpf;
    }
    
}
