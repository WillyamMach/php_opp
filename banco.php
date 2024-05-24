<?php

require 'src/Conta.php';

$conta1 = new Conta();

$conta1->sacar(100);

var_dump($conta1);