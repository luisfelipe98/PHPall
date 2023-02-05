<?php

// Objeto é um dos paradigmas da orientação orientadas a objetos
// Objetos são entidades que possuem comportamentos e características
// Possui métodos, propriedades, funções
// Métodos são suas ações e propriedades as suas características
// Métodos (Funções), Características ou Propriedades (Variáveis)
// Objeto é considerado um tipo de dado

// Objeto precisa de um 'molde', no caso, será pessoa
// Isso será um classe 
    class Pessoa {
        
        // Um= método desta classe
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