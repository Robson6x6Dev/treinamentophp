<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estrutura IF I</title>
</head>
<body>
    <?php
    $quilos = 11;
    $maisDez = $quilos * 2;
    $ateDez = $quilos * 3;
    $produto = "amora";

    if($quilos <= 10){
        echo "Você está levando $quilos  de $produto, o total é de R$ " . number_format($ateDez, 2, ",", ".") . ".";
    }elseif($quilos > 10){
        echo "Você está levando $quilos de $produto, o total é de R$ " . number_format($maisDez, 2, ",", ".") . ".";
    }

    ?>
    
</body>
</html>