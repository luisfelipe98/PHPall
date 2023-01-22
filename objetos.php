<?php

// Objeto é um dos paradigmas da orientação orientadas a objetos
// Possui métodos, propriedades, funções
// Métodos são suas ações e propriedades as suas características
// Objeto é considerado um tipo de dado

// Objeto precisa de um 'molde', no caso, será pessoa
// Isso será um classe 
    class Pessoa {
        
        // Uma característica desta classe
        function falar(){
            echo "Olá pessoas";
        }
    }

// Inicialização de uma classe
$luis = new Pessoa();

// Atribuindo uma propriedade a minha classe
$luis->nome = 'Luis';

echo $luis->nome . "<br>";

// Chamando uma função desta classe
$luis->falar();
?>