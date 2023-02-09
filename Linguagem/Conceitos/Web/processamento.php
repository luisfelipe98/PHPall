<?php

// Verificando se existe o método GET
// Se não existe, o array $_GET terá 0 valores

if (count($_GET) === 0) {
    echo "Não tem informação para esse site! <br>";
    die();
} else {
    $nome = $_GET["nome"];   
}

?>

<h1>O seu nome é <?= $nome?></h1>