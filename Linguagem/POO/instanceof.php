<?php

// Função instanceof
// Serve para descobrir se uma classe é "filha" de um objeto
// Retorna um booleano
// Exemplos

class Humano {

}

class Animal {

}

class Professor extends Humano {

}

$marcos = new Humano;

$turca = new Animal;

if ($marcos instanceof Humano) {
    echo "Marcos é um humano <br>";
} else {
    echo "Marcos não é um humano <br>";
}

if ($turca instanceof Humano) {
    echo "Turca é humano <br>";
} else {
    echo "Turca não é um humano <br>";
}

// Testando com herança
$pedro = new Professor;

if ($pedro instanceof Humano) {
    echo "Pedro é humano <br>";
} else {
    echo "Pedro não é um humano <br>";
}

if ($pedro instanceof Professor) {
    echo "Pedro é um professor <br>";
} else {
    echo "Pedro não é um professor <br>";
}

// O PHP considera que Pedro é tanto um professor como um humano
// Por isso podemos testar se um objeto é da sua própria classe como da classe "pai"

?>