<?php

// Criar uma função que recebe um array de lista de supermercado e exibi-lo seperado com a vírgula

function listaSupermercado ($array) {
    return implode(",", $array);
}

$lista = ["Pão","Café","Maça","Salgadinho","Carne","Sal"];

$resultado = listaSupermercado($lista);

echo $resultado;

?>