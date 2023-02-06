<?php

// Boolean é um tipo de dado que representa valores verdadeiros ou falsos
// É usado em expressões
// Alguns valores são considerados falso como 0, 0.0, "0", [] e NULL
// Analogia, true é igual a 1 e false é igual a 0

echo true . "<br>";
echo false . "<br>";

// Checagem se uma expressão é boolean ou não
// Usamos a expressão is_bool()
// Is_bool() retorna um valor booleano

// Exemplo positivo de boolean
$expressao = 5 > 2;
if (is_bool($expressao)){
    echo $expressao . " é um valor booleano <br>";
}else{
    echo $expressao . " não é um valor booleano <br>";
}

// Exemplo negativo de boolean
$expressao = 30;
if (is_bool($expressao)){
    echo $expressao . " é um valor booleano <br>";
}else{
    echo $expressao . " não é um valor booleano <br>";
}

?>