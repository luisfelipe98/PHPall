<?php 

// Manipulação de Strings

// Interpolação de Strings
// Pode ser feito em três formas
// Dentro de "" ou em {}
// Concatenação

// Exemplos
$teste = "teste";

echo "Interpolando variável em aspas duplas $teste <br>";
echo "Interpolando variável em chaves {$teste} <br>";

// Ambas não tem diferença em questão de performance

// Concatenação
// Usamos . para juntar textos com variáveis
// Exemplo

$num = 10;
echo "O valor da variável \$num é " . $num . "<br>";

?>