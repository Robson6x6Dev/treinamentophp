<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Do While I</title>
</head>
<body>
    <?php

    //variaveis para ver maior e menor
    $valor1 = 7;
    $valor2 = 17;

    // variavel para comparar qual o maior e menor numero.
    $menor = min($valor1, $valor2);
    $maior = max($valor1, $valor2);

    
    //variavel para imprimir o primeiro número intermediario entre os dois.
    $contador = $menor + 1;

   echo "Os números intemediarios entre o menor e maior são: <br>";

    do{
        echo $contador . "<br>";
        $contador++;
    }while($contador < $maior);


    ?>
</body>
</html>