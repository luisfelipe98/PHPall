<?php

// O protocolo HTTP NÃO MANTÉM ESTADO (Stateless)
// A cada atualização de uma página na Web, muda-se a conexão entre usuário e servidor
// Cookies são strings que contém informações
// A função para adicionar é setcookie
// O Cookie tem que ser inicializado no topo da página para que ele passe as informações ao cabeçalho
// Podemos resgatar valores com o $_COOKIE
// Sempre tomar cuidado com o tamanho do Cookie e, alguns navegadores, proibem sua utilização

setCookie("nome", "Luis", time() + 3600);

if (isset($_COOKIE["nome"])) {
    $nome = $_COOKIE["nome"];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie</title>
</head>
<body>
    <h1>Olá Mundo!!!</h1>
    <?php if ($nome != "") : ?>
        <p>Seja bem-vindo <?= $nome; ?></p>
    <?php endif; ?>
</body>
</html>