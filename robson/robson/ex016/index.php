<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <title>Torneio</title>
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    </head>

    <body>
        <?php
            $pesoAtleta = 65;
            $valorInscrição = 100;

            if($pesoAtleta <= 60){
                echo "Sua categoria para participação no campeonato é de novato.";
            }else{
                echo "Sua categoria para participação no campeonato é de Profissional.<br><br>";
            }

            echo "O valor da inscrição é de R$ " . number_format($valorInscrição, 2, ",", ".") . ".";
        ?>
    </body>
</html>