<?php 
require 'src/conta.php';

$conta = new Conta();

$conta->cpfTitular = '123.345.678.91';
$conta->saldo = 399;
$conta->nomeTitular = 'Willyam';

$conta_2 = new Conta();

$conta_2->cpfTitular = '123.345.678.91';
$conta_2->saldo = 100;
$conta_2->nomeTitular = 'João';

$conta->transferir(100, $conta_2);
var_dump($conta);
var_dump($conta_2);