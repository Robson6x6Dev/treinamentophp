<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estrutura IF II</title>
</head>
<body>
    <?php
    $sexo = "feminino";
    $idade = 18;

    if($sexo == "feminino" && $idade >= 18){
        echo "ACEITA.";
    }else{
        echo "NÃO ACEITA";
    }

    ?>
    
</body>
</html>