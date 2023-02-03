<?php

// Array é um tipo de dado que serve para agrupar um conjunto de valores
// Pode ser valores de qualquer tipo
// Sintaxe é [valor1, valor2, etc]
// Normalmente, os arrays mantém o mesmo tipo de dado dentro, mas não é uma regra

$numeros = [1,2,3];

// Podemos usa a função print_r() para exibir as informações dentro de um array;

print_r($numeros);
echo "<br>";

// A exibição de um array precisa ser ultizada pelo indice
// Exemplo:

echo $numeros[0];
echo "<br>";

// O índice de um array sempre começará no 0

// Array com mais de um tipo de dado

$arr = ["Luis", 0, true];
print_r($arr);

// Adicionando dados no Array manualmente

$array = [];

// Adicionando três itens nesse array vazio
$array[0] = 45;
$array[1] = "Layla";
$array[2] = "José";

echo "<pre>";
print_r($array);
echo "</pre>";

// Substituindo o array manualmente
$array[1] = "Camila"; // Mudei o valor do índice 1

echo "<pre>";
print_r($array);
echo "</pre>";

// Adicionando dados no fim do array
// É só NÃO ESPECIFICAR O ÍNDICE, pois irá já para o último lugar do array
// Exemplos

$array[] = "João"; // Assim é adicionado após o último item do array
$array[] = "Natália";

echo "<pre>";
print_r($array);
echo "</pre>";

// Criando array rapidamente
// Usando a função range()
// Nesta função colaca-se os ELEMNETOS de forma automática
// Range(elemento inicial, elemento final, [step = incremento ou decremento])
// Exemplo

$array = range(1, 10); // Elementos de 1 a 10 no array

echo "<pre>";
print_r($array);
echo "</pre>";

// Função count
// Serve para descobrir a quantidade de elementos do array
// Retorna um valor int
// Exemplo

$array = range(1, 100, 3);
echo "O array tem " . count($array) . " elementos <br>";

// Função Array_slice
// Serve para resgatar uma faixa de elementos do array
// array_slice(array, onde começa a resgatar, quantos elementos quero resgatar a partir do índice passado)

$array = [1, 5, 9, 13, 17, 21, 25, 29, 33, 37, 41, 45, 49];

$slice1 = array_slice($array, 3, 6); // Pegar do 13 até o 33

echo "<pre>";
print_r($slice1);
echo "</pre>";

$slice2 = array_slice($array, 6, 6); // Pegar do 25 ao 45

echo "<pre>";
print_r($slice2);
echo "</pre>";

// Se omitir o terceiro parâmetro, ele irá pegar do índice até o final do array
$slice3 = array_slice($array, 8); // Pegar do 33 em diante 

echo "<pre>";
print_r($slice3);
echo "</pre>";

// Se, no terceiro parâmetro, colocar número negativo, 
// ele irá pegar do final do array e subtrair até o limitador imposto
$slice4 = array_slice($array, 7, -3); // Pegar do 29 ao 37

echo "<pre>";
print_r($slice4);
echo "</pre>";

?>