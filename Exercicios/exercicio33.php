<?php

// Percorrer uma string contando a quantidade de vezes que aparece um caracter

$string = "O rato roeu a roupa do rei de Roma";

$qtdeA = 0;

for ($i = 0; $i < strlen($string); $i++) {
    if ($string[$i] === "a" || $string[$i] === "A") {
        $qtdeA++;
    }
}

if ($qtdeA === 0) {
    echo "Não temos a letra a dentro da string";
} else if ($qtdeA === 1) {
    echo "Temos a letra a " . $qtdeA . " vez"; 
} else {
    echo "Temos a letra a " . $qtdeA . " vezes"; 
}

?>