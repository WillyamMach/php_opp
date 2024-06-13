<?php 
class Titular {
    private string $cpf;
    private string $nome;

    public function __construct(string $nome, string $cpf) {
        $this->nome = $nome;
        $this->cpf = $cpf;
    }

    public function recuperaCpf() {
        return $this->cpf;
    }

    public function recuperaNome() {
        return $this->nome;
    }

    private function validaNomeTitular (string $nomeTitular){ 
        if(strlen($nomeTitular) < 5) {
            echo "Nome precisa ter no minimo 5 caracteres";
        }
    }
}