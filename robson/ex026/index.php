<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch I</title>
</head>
<body>
    <?php
    //Código mais salario do funcionario
    $codigo = 6; //insira o código aqui
    $salario = 1000; // insira o salário aqui

    //percentual de aumento
    $percentual = 0;

    switch ($codigo){
        case 1:
            $percentual = 50;
            $cargo = "Escriturário";
            break;
        case 2:
            $percentual = 35;
            $cargo = "Secretário";
            break;
        case 3:
             $percentual = 20;
            $cargo = "Caixa";
            break;
        case 4:
            $percentual = 10;
            $cargo = "Gerente";
            break;
        case 5:
            $percentual = 5;
            $cargo = "Diretor";
            break;
        default:
            echo "Código não encontrado";
            return;
    }

    //Calculo novo salário
    $aumento = ($salario * $percentual) / 100;
    $novoSalario = $salario + $aumento;

    //impressão dos resultados
echo "Seu antigo salário é: R$ " . number_format($salario, 2, ",", ".") . "<br>";
echo "Seu cargo é $cargo<br>";
echo "Novo salário: R$ " . number_format($novoSalario, 2, ",", ".") . "<br>";
echo "Diferença: R$ " . number_format($aumento, 2, ",", ".") . "<br>";
    ?>
    
</body>
</html>