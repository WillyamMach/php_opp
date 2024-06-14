<?php

require 'src/Conta.php';
require 'src/titular.php';
require 'src/cpf.php';

$vinicius = new Titular ('vinicius', new Cpf('123.345.456.67'));
$fernanda = new Titular ('Fernanda', new Cpf('123.345.667.83'));

$conta1 = new Conta($vinicius);
$conta2 = new Conta($fernanda);

echo Conta::recuperaNumeroDeContas();