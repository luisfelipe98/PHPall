<?php

// O tipo de dado NULL tem apenas um valor, o NULL
// Usado em variáveis que não tem um valor ao inicializa-la
// Um caso de uso é checar se a variável tem algum valor ou não
// No caso, usa a função is_null()
// Is_null() retorna um valor booleano

$idade = null;

// Exemplo positivo do uso do Is_null()
if (is_null($idade)){
    echo "A variável é nula <br>";
}else{
    echo "A variável tem valor <br>";
}

$idade = 34;
// Exemplo negativo do uso do Is_null()
if (is_null($idade)){
    echo "A variável é nula <br>";
}else{
    echo "A variável tem valor <br>";
}

// Quando se utiliza '' ou "", quer dizer que a variável TEM UM VALOR

$nome = '';
if (is_null($nome)){
    echo "A variável é nula <br>";
}else{
    echo "A variável tem valor <br>";
}
?>