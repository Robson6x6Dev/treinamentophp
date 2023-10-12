<?php
$valor = 1220.44;
$Parcelas = 4;

echo "você realizou uma compra no valor de R$ " . number_format($valor, 2, ",", ".") . " confira as parcelas abaixo:<br>";
$valor /= $Parcelas;
echo "Parcela 1: R$ " . number_format($valor, 2, ",", ".") . "<br>Parcela 2: R$ " . number_format($valor, 2, ",", ".") . "<br> Parcela 3: R$ " . number_format($valor, 2, ",", ".") . "<br>Parcela 4: R$ " . number_format($valor, 2, ",", ".");
?>