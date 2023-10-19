<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Swith II</title>
</head>
<body>
    <?php
    //Código status compra
    $codigo = 5;

    switch ($codigo) {
        case 1:
            echo "Aguardando pagamento. <br>";
            break;

        case 2:
            echo "Pago. <br>";
            break;

        case 3:
            echo "Em transporte. <br>";
            break;

        case 4:
            echo "Entregue. <br>";
            break;

        default:
        echo "Código não encontrado. <br>";
        break;
    }

    ?>
    
</body>
</html>