<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>While II</title>
</head>
<body>
    <?php
    //variável para aplicar a repetição
    $a = 1;
    $b = 7;

    //while é a condição para aplicar a repetição
    while($a <= 7){
        echo "O gato $a subiu a escada. <br>
        O cachoro $b desceu a escada.<br>";

        $a++;
        $b--;
    }
    ?>
</body>
</html>