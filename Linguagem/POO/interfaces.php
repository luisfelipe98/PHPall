<?php

// Interface é um modelo de definição de uma classe 
// Significa seguir o padrão da interface
// Se tiver um método x, a classe implementada da interface TEM QUE TER o método x
// A ideia é para as classes seguir um padrão
// Exemplos

interface Caracteristicas { // Essa é a interface

    const nome = "Matheus";

    public function falar();

}

class Humano implements Caracteristicas { // Classe implementando a interface

    public $idade = 29;

    public function falar() {
        echo "Ola Mundo! <br>";
    }

    public function dizerNome() {
        echo "Meu nome é " . self::nome . "<br>";
    }
}

$matheus = new Humano;

$matheus->falar();

$matheus->dizerNome();

?>