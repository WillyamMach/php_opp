<?php

require 'src/Conta.php';

$conta1 = new Conta('ana Julia','123.345.678.90');
$conta2 = new Conta('Fernanda','123.345.667.83');


echo Conta::recuperaNumeroDeContas();