<?php

$comissao = 1321.45;
$salario = 7600.25;
$desInss = 608.45;
$desIrrf = 1364.65;

echo "Seu sálario mais comissão é de R$ " . number_format($comissao+=$salario, 2, ",", ".") . " Com os descontos de R$ " . number_format($desInss+=$desIrrf, 2, ",", ".") . " refentes a INSS e IRRF<br>" ;
echo "Seu sálario líquido é de R$" . number_format($comissao-=$desInss, 2, ",", ".");

?>