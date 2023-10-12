<?php

$compra = 1220.44;
$parcelas = 4;

$valorDasParcelas = $compra / $parcelas;

echo "Sua compra foi parcelada em 4X de R$ " . number_format($valorDasParcelas, 2, ",", ".") . ". <br> Valor total de R$ " . number_format($compra, 2, ",", "."); 

?>