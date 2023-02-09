<?php
// Auto processamento é, na mesma página, fazer o envio das informações e 
// a própria fazer as análises necessárias
// Isso acontece muito em páginas que executam duas funções

$method = $_SERVER["REQUEST_METHOD"];

if (isset($_POST["nome"])) {
    $nome = $_POST["nome"];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testando o auto processamento</title>
</head>
<body>
    <?php
        if ($method == "GET"):
    ?>
    <form action="autoprocessamento.php" method="POST">
        <div>
            <input type="text" name="nome" placeholder="Digite seu nome">
        </div>
        <div>
            <input type="submit" value="Enviar">
        </div>
    </form>
    <?php 
        else:
    ?>
        <h1> O seu nome é <?= $nome; ?></h1>
    <?php 
        endif;
    ?>    
</body>
</html>