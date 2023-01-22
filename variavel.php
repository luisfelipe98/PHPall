<?php

// Variável por variável
// Podemos atribuir um nome de varável em outra variável
// Utilizado para criar variáveis dinâmicas
// Utilizaremos o $$ para isso

$x = "teste"; // variável $x com o valor teste
$$x = 5; // variável teste com valor 5

echo $teste; // A variável $$x virou $teste por causa da atribuição do valor de $x ao nome da varável 

?>

