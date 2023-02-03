<?php

// Criar um array associativo de nomes e idades
// Imprimir os valores utilizando a tag table do HTML

$pessoas = [
    "Maria" => 70,
    "Sonia" => 22,
    "Gregório" => 34,
    "Pedro" => 45,
    "Tom" => 31,
    "Marcos" => 15,
    "Layla" => 9,
    "Eric" => 20,
    "Geovana" => 30,
    "Juliana" => 25
];
?>

<html>
    <title>Exercício 43</title>
    <head></head>
    <body>
        <table>
            <tr>
                <th>Nome</th>
                <th>Idade</th>
            </tr>
            <?php
                foreach ($pessoas as $nome => $idade):
            ?>
                <tr>
                    <td><?= $nome; ?></td>
                    <td><?= $idade; ?></td>
                </tr>
            <?php
                endforeach;
            ?>         
        </table>          
    </body>
</html>
        
        