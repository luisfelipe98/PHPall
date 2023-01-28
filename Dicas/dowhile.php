<?php

// Do while é uma estrutura de repetição
// Pouco utilizado
// A sintaxe é invertida comparada com o while
// Ela pe mais "lógica", no sentido de quem está lendo o código

// Exemplos

 $i = 0;

 do {
    echo "Testando do while incrementando " . $i . "<br>";
    $i++;
 } while ($i <= 10);
echo "<br><br><br>";

 $j = 10;

 do {
    echo "Testando do while decrementando " . $j . "<br>";
    $j--;
 } while ($j >= 0);
echo "<br><br><br>";

 $i = 0;

 do {
    if ($i === 7) {
        break;
    } else if ($i % 2 === 0) {
        $i++;
        continue;
    } else {
        echo "Testando do while com break e continue " . $i . "<br>";
        $i++;
    }
    
 } while ($i <= 10);

?>