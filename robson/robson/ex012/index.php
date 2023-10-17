<DOCTYPE html>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <link rel="shortcut icon" href="favicon.ico">
        <title>Robson - decremento</title>
    </head>

    <body>
        <?php
            $qtdProdutoA = 115;
            $produtoA = "batata";
            echo "<h3>Estoque</h3>";
            echo "No momento você tem " . $qtdProdutoA-- . " unidades de " . $produtoA . ".<br>";
            echo "Foi encontrada uma $produtoA podre no estoque atualizado para $qtdProdutoA.";

        

        ?>
    </body>
</html>