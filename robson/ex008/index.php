<?php

$quantidadeVendida = 58;
$valorUnitario = 280.74;

$total = $valorUnitario * $quantidadeVendida;

echo "O valor total vendido do produto A foi de R$ " . number_format($total, 2, ",", ".");
?>