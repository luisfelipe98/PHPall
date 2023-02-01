<?php

// Criar função que receba caracterísitca de um item
// Deve conter nome e preço
// Retornar items que custam mais de R$ 10

function items($carro) {
    $resultado = [];
    foreach ($carro as $index => $item) {
        if ($item > 10) {
            array_push($resultado, $index);
        }
    }
    return $resultado;
}

$carro = [
          "porta" => 300,
          "para-brisa" => 500,
          "dados" => 5,
          "espelhos" => 150,
          "retrovisor" => 8,
          "rodas" => 800
         ];

$resultado = items($carro);
$tamArray = count($resultado);

if ($tamArray > 1) {
    echo "Os produtos acima de R$ 10 são: ";
} else {
    echo "O produto acima de R$ 10 é: ";
}

$cont = 0;
do {
    if ($tamArray === 1 || $tamArray - 1 === $cont) { // Coloca o ponto final (.) no único ou depois do último elemento
        echo $resultado[$cont] . "."; 
        break;  
    } else if ($tamArray - 2 === $cont) { // Coloca o e depois do penúltimo elemento
        echo $resultado[$cont] . " e ";
        $cont++;
    } else {
        echo $resultado[$cont] . ", ";
        $cont++;
    }
} while ($cont < $tamArray);
?>