<?php

// Função Str_replace
// Serve para substituir algo dentro de uma string
// Str_replace(o que quer substituir, pelo o que você quer trocar, string)
// Exemplo

$string = "   Testando o str_replace para ver se funciona   ";

// Quero juntar a string ser ter espaços
$novaString = str_replace(" ", "", $string);

echo "Transformando uma string assim: ";

for ($i = 0; $i < strlen($string); $i++) {
   if ($string[$i] === " ") {
      echo "-";
   } else {
      echo $string[$i];
   }
}

echo "<br> Para: " . $novaString . "<br>";

?>