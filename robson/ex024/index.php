<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>estrutura if ... else ... elseif I</title>
</head>
<body>
    <?php
    //variavel de nota para exibição do conceito da nota.
    $nota = 1;

    //condições para exibição do conceito da nota
    if($nota >= 8 && $nota <= 10 ){
        echo "A";
    }elseif($nota >= 7 && $nota <= 7.9){
        echo "B";
    }elseif($nota >= 6 && $nota <= 6.9){
        echo "C";
    }elseif($nota >= 5 && $nota <= 5.9){
        echo "D";
    }elseif($nota >= 0 && $nota <= 4.9 ){
        echo "E";
    }else{
        echo "Nota não encontrada.";
    }
    ?>
</body>
</html>