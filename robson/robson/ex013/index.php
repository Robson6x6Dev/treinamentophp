<DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Robson pré-incremento</title>
        <link rel="shortcut icon" href="favicon.ico">
    </head>

    <body>
        <?php
        $pedagio = 1529;
        $valorPedagio = 32.50;

        echo "<h3>Contagem pedágio</h3>";
        echo "A quantidade de veiculos que passaram no pedágio até o momento é de " . number_format(++$pedagio, 0, ",", ".") . ".<br>";
        echo "O total em seu caixa é de R$ " . number_format($pedagio *= $valorPedagio, 2, ",", ".") . "."; 

        ?>
    </body>
</html>