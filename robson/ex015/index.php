<DOCTYPE html>
<html lang="pt-br">
    
    <head>
    <meta charset="utf-8">
    <title>Aprovação</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    </head>

    <body>
        <?php
            $notaMedia = 8.5;
            $notaAluno = 9;

            if($notaAluno >= $notaMedia){
                echo "Aprovado:<br> sua nota foi $notaAluno. A nota para aprovação é $notaMedia ou maior.";
            }else{
                echo "Reprovado:<br> sua nota foi $notaAluno, a nota necessária para aprovação é $notaMedia ou maior.";
            }
        ?>
    </body>
</html>