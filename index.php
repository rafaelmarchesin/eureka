<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esta é a Eureka!</title>
    <link rel="stylesheet" href="./estilo/style.css">
</head>
<body>
    <?php
        //Constrói o cabeçalho da página
        require './view/lista-tarefas/header.php';

        //Constrói o corpo da página
        require './view/lista-tarefas/body.php';

        //Constrói o rodapé da página
        require './view/lista-tarefas/footer.php';
    ?>
</body>
</html>