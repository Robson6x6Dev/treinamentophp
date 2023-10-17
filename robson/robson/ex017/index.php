<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="imagens/favicon.ico" type="image/x-icon">
    <title>Operadores lógicos</title>
</head>
<body>
    <?php
        $altura = 1.70;
        $peso = 59;

        //foi utilizado && para comparar uma variavel entre duas condições e AND para comparar as condições.
        if(($peso >= 50 && $peso < 60) AND ($altura < 1.70)){
            echo "Você foi classificado para a categoria de novato do torneio";
        }elseif(($peso >= 60 && $peso <= 80) AND ($altura >= 1.70 && $altura < 1.90)) {
            echo "Você foi classificado para a categoria profissional do torneio";
        }else{
            echo "infelizemente você não se enquadra nas normas para participar do torneio, consulte os termos e tente novamente no próximo ano";
        }
    ?>
</body>
</html>