<?php

$produtoA = 280.74;
$qtdprodutoA = 58;

echo "No mês de Junho foram vendidas $qtdprodutoA, unidades do produto A.<br>";
$produtoA *= $qtdprodutoA;
echo "o Valor total de vendas foi de R$ " . number_format($produtoA, 2, ",", "."); 

?>