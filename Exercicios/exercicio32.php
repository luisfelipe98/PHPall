<?php

// Criar função que receba caracterísitca de um item
// Deve conter nome e preço
// Retornar items que custam mais de R$ 10

function itensCaros($itens) {
    $resultado = [];
    foreach ($itens as $item => $preço) {
        if ($preço > 10) {
            array_push($resultado, $item);
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

$resultado = itensCaros($carro);
$tamArray = count($resultado);

if ($tamArray === 0) {
    echo "Nenhum produto acima de R$ 10";
    die();
} else if ($tamArray === 1) {
    echo "O produto acima de R$ 10 é: ";   
} else {
    echo "Os produtos acima de R$ 10 são: ";
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