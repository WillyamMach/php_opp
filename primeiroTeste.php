<?php 
require 'src/conta.php';

$conta = criarConta('123.345.567.89', 'Willyam', 3000);

var_dump($conta);