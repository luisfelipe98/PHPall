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
// Exemplos

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

// Função Array_chunck
// Serve para dividir um array grande em VÁRIAS PARTES IGUAIS
// Array_chunck(array, número de elementos que cada array terá)
// Exemplo

$array = range(1, 511, 15);

$arrayDividido = array_chunk($array, 5); // Quero arrays de 5 elementos cada

echo "<pre>";
print_r($arrayDividido);
echo "</pre>";

// Função Array_splice
// Serve para remover e resgatar uma faixa de elementos do array
// array_splice(array, onde começa a remover ou resgatar, quantos elementos quero remover ou resgatar a partir do índice passado)
// Exemplos

$array = [1, 2, 3, 4, 5, 6];

// Remover o elemento 2 e 3 do array
$removidos = array_splice($array, 1, 2);

echo "<pre>";
print_r($removidos);
echo "</pre>";

// Com a remoção o array original é modificado

echo "<pre>";
print_r($array);
echo "</pre>";

$array2 = [1, 2, 3, 4, 5, 6];

// Se não passar o terceiro parâmetro, ele remove do índice até o final
$removidos = array_splice($array2, 3); //Removendo do 4 pra frente

echo "<pre>";
print_r($array2);
echo "</pre>";

$array3 = [1, 2, 3, 4, 5, 6];

// Se, no terceiro parâmetro, colocar número negativo, 
// ele irá pegar do final do array e subtrair até o limitador imposto
$removidos = array_splice($array3, 1, -1); // Deixar os elementos 1 e 6

echo "<pre>";
print_r($array3);
echo "</pre>";

// Funçao Array_reduce
// Serve para reduzir um array em um único valor
// Array_reduce(array, função em foramto de string)
// Exemplos

// Somar todos os items de um array
function soma ($a, $b) {
    return $a + $b;
}

$array = range(10, 100, 7);

// Usando o array_reduce
$resultado = array_reduce($array, "soma");

echo "A soma de todos os items do array é " . $resultado . "<br>";

// Subtrair todos os items do array
function subtracao ($a, $b) {
    return $a - $b;
}

$array = range(40, -40, -13);

// Usando o array_reduce
$resultado = array_reduce($array, "subtracao");

echo "A subtracao de todos os items do array é " . $resultado . "<br>";

// Função In_array
// Serve para identificar um elemento dentro do array
// Retorna um boolean
// In_array(o que você quer procurar, array)
// Exemplos

$array = range(0, 100, 2);

// Exemplo positivo
if (in_array(44, $array)) {
    echo "O número 44 está presente no array <br>";
} else {
    echo "O número 44 não está presente no array <br>";
}

// Exemplo negativo
if (in_array(57, $array)) {
    echo "O número 57 está presente no array <br>";
} else {
    echo "O número 57 não está presente no array <br>";
}

// Função Array_reverse
// Serve para inverter um array
// NÃO ALTERA O ARRAY ORIGINAL
// Array_reserve(array que quero inverter)
// Exemplos

$array = [1, 2, 3, 4, 5];

echo "O array original é ";
for ($i = 0; $i < count($array); $i++) {
    if (count($array) - 1 === $i) { // Último elemento
        echo $array[$i] . ".";
    } else {
        echo $array[$i] . ", ";
    }
}

// Fazendo a reversão do array
$arrayReverso = array_reverse($array);

echo "<br>";
echo "O array reverso é ";

$cont = 0;
while ($cont < count($arrayReverso)) {
    if (count($arrayReverso) - 1 === $cont) { // Último elemento
        echo $arrayReverso[$cont] . ".";
        $cont++;
    } else {
        echo $arrayReverso[$cont] . ", ";
        $cont++;
    }
}

// Não funciona só com números
$array2 = ["Tua", 545.2, [3,4], true, "Carla"];

$array2Reverso = array_reverse($array2);

echo "<pre>";
print_r($array2Reverso);
echo "</pre>";

// Função Shuffle
// Reorganiza um array de forma aleatória
// ALTERA O ARRAY ORIGINAL
// shuffle(array)
// Exemplos

$array = range(1, 30, 4);

echo "Meu array original é ";

$cont = 0;
do {
    if (count($array) - 1 === $cont) { // Último elemento
        echo $array[$cont] . ". <br>";
        $cont++;
    } else {
        echo $array[$cont] . ", ";
        $cont++;
    }
} while ($cont < count($array));

// Fazendo a organização aleatória
shuffle($array);

echo "Meu array aleatório é ";

$cont = 0;
while ($cont < count($array)) {
    if (count($array) - 1 === $cont) { // Último elemento
        echo $array[$cont] . ". <br>";
        $cont++;
    } else {
        echo $array[$cont] . ", ";
        $cont++;
    }
}

// Não funciona só com números

$arrayAleatorio = [354, true, 75, "banana", 23.1, -89, "Carlos", "cavalo", -100.15];

echo "Meu array é ";

for ($i = 0; $i < count($arrayAleatorio); $i++) {
    if (count($arrayAleatorio) - 1 === $i) {
        echo $arrayAleatorio[$i] . ". <br>";
    } else {
        echo $arrayAleatorio[$i] . ", ";
    }
}

// Organizando o array aleatoriamente
shuffle($arrayAleatorio);

echo "Meu array aleatório é ";

for ($j = 0; $j < count($arrayAleatorio); $j++) {
    if (count($arrayAleatorio) - 1 === $j) {
        echo $arrayAleatorio[$j] . ". <br>";
    } else {
        echo $arrayAleatorio[$j] . ", ";
    }
}

// Função Array_sum
// Serve para somar todos os elementos do array
// A função IGNORA OUTROS TIPOS DE VALORES QUE NÃO FOREM NÚMEROS
// Array_sum(array)
// Exemplos

$array = [-4, 7, 45.1, 35, -19, 25];

echo "A soma dos números do array é " . array_sum($array) . "<br>";

// Função Array_merge
// Serve para unir dois ou mais arrays
// Array_merge(array)
// Exemplo

$array1 = [4, 9, 15];
$array2 = [-1, -15, -67.6];
$array3 = [-44.6, -90, -7.2];

// Juntando os arrays
$arrayMerge = array_merge($array1, $array2, $array3);

// Exibindo na tela
echo "O array depois do merge ficou ";
for ($k = 0; $k < count($arrayMerge); $k++) {
    if (count($arrayMerge) - 1 === $k) { // Último elemento
        echo $arrayMerge[$k] . ". <br>";
    } else {
        echo $arrayMerge[$k] . ", ";
    }
}

?>