<?php

// Função printf
// Semelhante ao print
// Ela consegue imprimir valores dinâmicos através do símbolo de %
/* Exemplos
   %f = float
   %d = int
   $s = string
   etc
*/ 

$nome = "Antonio";
$num = 1000;
$temperatura = 39.5;

printf("Meu nome é %s <br>", $nome);
printf("Um número é %d e o outro é %d <br>", 10, $num);
printf("A temperatura está em %.1f ºC <br>", $temperatura);

?>