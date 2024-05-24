<?php

require 'src/Conta.php';

$conta1 = new Conta();
$conta1->depositar(100);
$conta1->sacar(40);
$conta1->adicionarNome('josé');
$conta1->adicionarCpf('123.345.678.90');


echo $conta1->recuperarNomeTitular() . '<br>';
echo $conta1->recuperarCpfTitular() . '<br>';
echo $conta1->recuperarSaldo();