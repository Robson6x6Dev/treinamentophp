<DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Carregamento</title>
        <link rel="shortcut icon" href="favicon.ico">
    </head>

    <body>
        <?php
            $totalContainers = 232;
            $containersCarregados = 231;
            $continersDocas = $totalContainers - $containersCarregados;

            echo "<h3>Carregamento de containers</h3>";
            echo "A quantidade de containers dentro do navio é de $containersCarregados unidades, na docas tem o total de $continersDocas containers <br><br>";

            if($totalContainers == $containersCarregados){
                echo "Carregamento concluído";
            }else{
                echo "O carregamento não foi concluído ainda faltam " . $continersDocas . ".";
            }

        ?>
    </body>
</html>