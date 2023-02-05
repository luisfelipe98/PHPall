<?php 

// Else If é a criação de uma NOVA CONDIÇÃO dentro do ELSE
// É utilizado quando o if for FALSO

// Exemplos
if (10 > 1) {
    echo "Deu certo! Entrou dentro do if 1 <br>";
} else if (14 > 5) { // Será ignorado porque o if é VERDADEIRO
    echo "Deu certo! Entrou no else if 1 <br>";  
}

if ("João" !== "João") {
    echo "Deu certo! Entrou dentro do if 2 <br>";
} else if (is_string("João")) { 
    echo "Deu certo! Entrou no else if 2 <br>";  
}

// Usando variáveis
$nome = "Carlos";
if (is_int($nome) || is_float($nome)) {
    echo "Deu certo! Entrou dentro do if 3 <br>";
} else if (is_bool($nome)) { 
    echo "Deu certo! Entrou no else if 3 <br>";  
} else {
    echo "Deu certo! Entrou no else 3 <br>"; 
}

?>