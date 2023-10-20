<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Do while I</title>
</head>
<body>
    <?php
    $senha = 99;
    $contador = 100;
do{
    echo "Última senha informada $contador. <br>";
    $contador++;
}while($contador <= $senha);

if($senha < 100){
    echo "Senha inválida";
}
    ?>
    
</body>
</html>