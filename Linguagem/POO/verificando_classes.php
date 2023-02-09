<?php

// 3 funções para verificar classes no PHP
// Class_exists() verifica se a classe existe
// Get_class_methods() verifica os métodos de uma classe
// Get_class_vars() verifica as propriedades de uma classe
// Exemplos

class Humano {

    public $nome;
    public $idade;
    public $profissao;

    public function falar() {}

    public function andar() {}
}

// Class_exists() sendo utilizado
// Exemplo positivo
if (class_exists("Humano")) {
    echo "A classe existe <br>";
}

// Exemplo negativo
if (class_exists("Cachorro")) {
    echo "A classe existe <br>";
} else {
    echo "A classe não existe <br>";
}

// Get_class_vars() sendo utilizado
echo "<pre>";
print_r(get_class_vars("Humano"));
echo "</pre>";

// Get_class_methods() sendo utilizado
echo "<pre>";
print_r(get_class_methods("Humano"));
echo "</pre>";

?>