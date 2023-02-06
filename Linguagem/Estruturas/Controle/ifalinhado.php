<?php

// If Aninhado
// É um if dentro de outro if
// Será avaliado do jeito que estiverem dispostas, de fora para dentro do bloco
// É pouco utilizado

// Exemplos
if (60 % 3 == 0) {
    if (40 > 4) {
        echo "Deu certo! Entrou dentro do segundo if <br>"; 
    }
}

if (40 != "João") {
    if (55 >= 101) {
        echo "Deu certo! Entrou dentro do segundo if <br>"; 
    } else {
        echo "Deu errado! Entrou dentro do else do segundo if <br>"; 
    }
}

// Usando variáveis
$num = 77;
$nome = "Isabel";

if ($num === $nome) {
    if (47 % 7 == 5) {
        echo "Deu certo! Entrou dentro do segundo if <br>"; 
    } else {
        echo "Deu errado! Entrou dentro do else do segundo if <br>"; 
    }
} else {
   echo "Deu errado! Entrou dentro do else do primeiro if <br>";  
}


?>