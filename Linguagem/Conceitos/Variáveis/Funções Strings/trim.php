<?php

// Limpando uma string
// Quer dizer remover espaços antes e depois de uma string
// Tem 3 funções especifícas para isso
// Trim, rtrim e ltrim
// Trim elimina espaços de antes e depois da string
// Ltrim elimina espaços do começo da string
// Rtrim elimina espaços do término da string
// Exemplos

$string1 = "   Luis   ";
$string2 = "   Carolina";
$string3 = "Mateus   ";

$cleanString1 = trim($string1);
$cleanString2 = ltrim($string2);
$cleanString3 = rtrim($string3);

// Mostrando que as strings estão limpas
for ($i = 0; $i < strlen($cleanString1); $i++) {
   if ($cleanString1[$i] === " ") {
      echo "-";
   } else {
      echo $cleanString1[$i];
   }
}
echo "<br>";

for ($i = 0; $i < strlen($cleanString2); $i++) {
   if ($cleanString2[$i] === " ") {
      echo "-";
   } else {
      echo $cleanString2[$i];
   }
}
echo "<br>";

for ($i = 0; $i < strlen($cleanString3); $i++) {
   if ($cleanString3[$i] === " ") {
      echo "-";
   } else {
      echo $cleanString3[$i];
   }
}
echo "<br>";

?>