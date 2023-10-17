<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>operadores lógicos II</title>
</head>
<body>
    <?php
    $media = 8.6;
    $valorFreq = 100;
    $frequencia = 71;
    $freqAprova = ($frequencia / $valorFreq) * 100;

    if(($media > 8.5 && $freqAprova > 70)){
        echo "Parabéns, você ganhou uma bolsa de Estudos <br><br>";
    }else{
        echo "Infelizmente não foi dessa vez, verifique com o responsável quando poderá ser efetuada uma nova tentativa. <br><br>";
    }

    Echo "Nos vemos em breve!";
    ?>
    
</body>
</html>