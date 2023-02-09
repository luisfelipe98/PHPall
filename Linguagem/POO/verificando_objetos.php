<?php

// 3 funções para verificar objetos no PHP
// Is_object() verifica se uma variável é objeto
// Get_class() verifica a classe de um objeto
// Method_exists() verifica se um método existe dentro de uma classe
// Exemplos

class Humano {
    public function falar() {
        echo "Ola! <br>";
    }
}

$luis = new Humano;

// Usando is_object()
// Exemplo positivo
if (is_object($luis)) {
    echo "É um objeto <br>";
} else {
    echo "Não é um objeto <br>";
}

$var = "";

// Exemplo negativo
if (is_object($var)) {
    echo "É um objeto <br>";
} else {
    echo "Não é um objeto <br>";
}

// Usando o get_class()
echo get_class($luis) . "<br>";

// Usando method_exists()
// Exemplo positivo
if (method_exists($luis, "falar")) {
    echo "O método existe <br>";
} else {
    echo "O método não existe <br>";
}

// Exemplo negativo
if (method_exists($luis, "comer")) {
    echo "O método existe <br>";
} else {
    echo "O método não existe <br>";
}
?>