<?php
// Método $_GET
// Com o GET processamos os parâmetros que vem da query string, ou seja, da URL
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabalhando com o método GET</title>
</head>
<body>
    <form action="processamento.php" method="GET">
        <div>
            <input type="text" name="nome" placeholder="Preencha seu nome">
        </div>
        <div>
            <input type="submit" value="Enviar">
        </div>    
    </form>
</body>
</html>