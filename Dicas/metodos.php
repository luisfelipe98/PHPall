<?php

// Métodos são as funções dentro de uma classe na Programação Orientada a Objetos 
// A sintaxe é a mesma de função no PHP, com a diferença sendo isso dentro de uma classe
// Podemos retornar valores ou imprimi-los
// Exemplos

class Pessoa {

    function falar() {
        echo "Olá, eu sou um objeto <br>"; 
    }

    function subtrair($a, $b) {
        return $a - $b;
    } 

}

// Instanciando a classe
 $luis = new Pessoa;

 // Chamando o método
 $luis->falar();

// Instanciando uma nova pessoa
$joao = new Pessoa;

// Comparando duas pessoas usando o mesmo código
$luisSub = $luis->subtrair(4, 6);
$joaoSub = $joao->subtrair(2, -5);

// Exibindo na tela
echo "A subtração de Luis é " . $luisSub . "<br>";
echo "A subtração de João é " . $joaoSub . "<br>";

?>