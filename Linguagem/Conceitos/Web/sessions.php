<?php

// Com os Sessions podemos criar uma variável que persiste em diferentes páginas e
// também perdura por várias visitas ao site ao mesmo tempo
// Sessions são utilizadas para carrinho de compras, autenticação etc
// É mais utilizado comparado aos cookies
// Sessions são salvas em arquivos no computador que estamos ou no servidor de aplicação
// O caminho (quando salvo no PC) fica indicado no php.ini na configuração session.save_path
// Session, igual ao Cookie, tem que ser iniciado no topo da página

session_start(); // Iniciando a Session

$_SESSION["nome"] = "Luis"; // Salvando uma informação

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sessions</title>
</head>
<body>
    <h1>Olá Mundo!!!</h1>
    <p>Seja bem-vindo <?= $_SESSION["nome"]; ?></p>
</body>
</html>