<?php

// Print serve para exibir uma mensagem na tela
// Ela tem o retorno da expressão como 1, sempre
// print "mensagem";
// Exemplos

print "Hello world com o print <br>";

// Podemos passar variáveis para ser exibidas
$var1 = "Hello";
$var2 = "World";

print $var1 . " " . $var2 . " com variáveis <br>";

// Podemes exibir resultados matemáticos, mas será transformado em STRING o resultado
print 6 + 7 . "<br>";

// Como print tem valor de retorno, ele pode ser usado dentro de expressões
if (print "Hello ") {
    print "World dentro do if <br>";
}

?>