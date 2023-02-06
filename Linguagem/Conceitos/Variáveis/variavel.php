<?php

// Variável por variável
// Podemos atribuir um nome de varável em outra variável
// Utilizado para criar variáveis dinâmicas
// Utilizaremos o $$ para isso

$x = "teste"; // variável $x com o valor teste
$$x = 5; // variável teste com valor 5

echo $teste . "<br>"; // A variável $$x virou $teste por causa da atribuição do valor de $x ao nome da varável 

// Variável por referência
// É uma variável que referência o MESMO PONTO DA MEMÓRIA DA OUTRA
// Utilizamos o símbolo =&
// Qualquer mudança nas variáveis, muda o resultado das duas

$n1 = 7.5;
$n2 =& $n1;

echo $n1 . "<br>";
echo $n2 . "<br>";

// Se mudamos a variável referenciada ($n2), ambas irão mudar

$n2 = 8.7;

echo $n1 . "<br>";
echo $n2 . "<br>";

// Se mudamos a variável de referência ($n1), ambas irão mudar

$n1 = 17.5;

echo $n1 . "<br>";
echo $n2 . "<br>";

?>