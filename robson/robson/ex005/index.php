<?php

 $comissao = 2320.29;
 $salario = 7600.25;
 $totalSalario = $comissao + $salario;

 
// a função number_format é utilizado para tranforma o valor em Real;
 echo "Seu salário atual é de R$ " . number_format($salario, 2, ",", ".") . " Sua comissão esse mês foi de R$ " . number_format($comissao, 2, ",", ".") . "<br><br>";
 echo "O valor total desse mês é de R$ " . number_format($totalSalario, 2, ",", ".") . " PARABÉNS!!!";

?>