<?php

// Criar um array com esses elementos
// Batata, maça, pera, feijão, arroz
// Remover pera e feijão

$listaMercado = ["batata", "maçã", "pera", "feijão", "arroz"];

// Exibindo os resultados na tela

if (count($listaMercado) === 0) {
    echo "Sem produtos para comprar no mercado <br>";
    die();
} else if (count($listaMercado) === 1) {
    echo "Na minha lista de mercado, tem para comprar o produto ";
} else {
    echo "Na minha lista de mercado, tem para comprar os produtos: ";
}

// Exibindo a lista original
$cont = 0;
while ($cont < count($listaMercado)) {
    if (count($listaMercado) === 1 || count($listaMercado) - 1 === $cont) { // Elemento único ou último elemento
        echo $listaMercado[$cont] . ". <br>";
        break;
    } else if (count($listaMercado) - 2 === $cont) { // Penúltimo elemento
        echo $listaMercado[$cont] . " e ";
        $cont++;
    } else {
        echo $listaMercado[$cont] . ", ";
        $cont++;
    }
}

// Removendo pera e feijão
$comprados = array_splice($listaMercado, 2, 2);

if (count($comprados) === 0) {
    echo "Fui ao mercado, achei os produtos caros e não comprei nenhum";
    die();
} else if (count($comprados) === 1) {
    echo "Fui ao mercado e comprei o produto ";
} else {
    echo "Fui ao mercado e comprei os produtos ";
}

// Exibindo a lista dos produtos comprados
for ($i = 0; $i < count($comprados); $i++) {
    if (count($comprados) === 1 || count($comprados) - 1 === $i) { // Elemento único ou último elemento
        echo $comprados[$i] . ". <br>";
        break;
    } else if (count($comprados) - 2 === $cont) { // Penúltimo elemento
        echo $comprados[$i] . " e ";
    } else {
        echo $comprados[$i] . ", ";
    }
}

if (count($listaMercado) === 0) {
    echo "Comprei tudo que estava precisando";
    die();
}  else if (count($listaMercado) === 1) {
    echo "Ainda falta comprar o produto ";
}  else {
    echo "Ainda falta comprar os produtos ";
}

// Exibindo a lista dos produtos faltantes
$cont = 0;
do { 
   if (count($listaMercado) === 1 || count($listaMercado) - 1 === $cont) { // Elemento único ou último elemento
        echo $listaMercado[$cont] . ".";
        break; 
    } else if (count($listaMercado) - 2 === $cont) { // Penúltimo elemento
        echo $listaMercado[$cont] . " e ";
        $cont++;
    } else {
        echo $listaMercado[$cont] . ", ";
        $cont++;
    } 
} while ($cont < count($listaMercado));

?>