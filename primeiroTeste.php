<?php 
require 'src/conta.php';

$conta = new Conta();

$conta->cpfTitular = '123.345.678.91';
$conta->saldo = 399;
$conta->nomeTitular = 'Willyam';

var_dump($conta);