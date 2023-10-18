<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estrutura IF ... ELSE I</title>
</head>
<body>
    <?php

    /*o programa que leia o salário e o código do cargo de cada funcionário, e calcule o novo salário. Se o cargo do funcionário não estiver na tabela, ele deverá, então, receber 35,5% de aumento. Imprima o salário antigo, o novo salário e a diferença. Código Cargo Percentual:
    91 Gerente 10%
    92 Analista 20%
    93 Técnico 30% */

    //código mais salario do funcionario
    $codigo = 1;
    $salario = 1000;
    
    //percentual caso o código não esteja na lista
    $percentualAumento = 35.5; 

    if($codigo == 91){
        $percentualAumento = 10;
    }elseif($codigo == 92){
        $percentualAumento = 20;
    }elseif($codigo == 93) {
        $percentualAumento = 30;
    }

    //calculo do novo salário
    $aumento = ($salario * $percentualAumento) / 100;
    $novoSalario = $salario + $aumento;

    //impressão dos resultados:
    echo "Salário antigo: R$ " . number_format($salario, 2, ",", ".") . "<br>";
    echo "Novo Salário: R$ " . number_format($novoSalario, 2, ",", ".") ."<br>";
    echo "Diferença: R$ " . number_format($aumento, 2, ",", ".") . "<br>";
    ?>
    
</body>
</html>