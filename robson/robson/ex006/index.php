<?php

$comissao = 1321.45;
$salario = 7600.25;
$descInss = 608.45;
$descIrrf = 1364.65;


// foi realizada a criação de uma variavel para a soma do salario + comissão, outra para a soma dos descontos e depois foi criada uma terceira para realizar a subtração do total
$totalRecebido = $salario + $comissao;
$totalDesconto = $descIrrf + $descInss;
$totalComDesconto = $totalRecebido - $totalDesconto;

echo "O valor do seu salário já com o descontos é de R$ " . number_format($totalComDesconto, 2, ",", ".") . ".<br><br>";

?>