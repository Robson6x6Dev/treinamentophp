<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estrutura if ... else ... elseif II</title>
</head>
<body>
    <?php
    //variavel para status da compra
    $statusCompra = 6;

    //estrutura de condições para exibição do Status da compra
    if($statusCompra == 1){
        echo "Aguardando pagamento.";
    }elseif($statusCompra == 2){
        echo "Pago.";
    }elseif($statusCompra == 3){
        echo "Em transporte.";
    }elseif($statusCompra == 4){
        echo "Entregue.";
    }else{
        echo "Status não encontrado.";
    }
    ?>
    
</body>
</html>