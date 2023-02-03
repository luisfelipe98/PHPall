<?php

// Criar um array associativo com nome e pontuação
// Ordenar para mostrar quem mais pontuou
// Exibir com a tag ol do HTML

$pontuacao = [
    "Kate" => 50,
    "Marcos" => 150,
    "Gabriel" => 89,
    "Ashley" => 350,
    "Joey" => 121,
    "Ross" => 500,
    "Chandler" => 320,
    "Barney" => 559,
    "Phoebe" => 31,
    "Monica" => 253,
    "John" => 412,
    "Daniel" => 214,
    "Serena" => 632,
    "Alison" => 79,
    "Blair" => 612,
    "Clarke" => 878,
    "Bellamy" => 890,
    "Monty" => 679,
    "Josephine" => 856,
    "John" => 750,
    "Raven" => 915,
    "Manny" => 438,
    "Gloria" => 537,
    "Ed" => 123,
    "DeMarcus" => 333,
    "Patrick" => 699
];

// Ordenando a lista pelo VALORES em forma DECRESCENTE
arsort($pontuacao);
?>

<html>
    <title>Pontuação de Jogo</title>
    <head></head>
    <body>
        <h2>Maiores pontuadores do jogo</h2>
        <ol>
            <?php foreach($pontuacao as $nome => $record): ?>
                <li><?= $nome; ?> <?= $record; ?></li>
            <?php endforeach; ?>    
        </ol> 
    </body>
</html>