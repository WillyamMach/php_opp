<?php

require 'src/Conta.php';
require 'src/titular.php';

$conta1 = new Conta(new Titular ('ana Julia','123.345.678.90'));
$conta2 = new Conta(new Titular ('Fernanda','123.345.667.83'));


echo Conta::recuperaNumeroDeContas();