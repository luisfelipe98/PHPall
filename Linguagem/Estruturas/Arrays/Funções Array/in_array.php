<?php

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

?>