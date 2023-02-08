<?php

// Classes abstratas são classes que não podem ser instanciadas
// Se herdar de um classe abstrata, obrigatoriamente terá que ter métodos abstratos

abstract class Teste {

    public static function testandoClasse() {
        echo "Este método é de uma classe abstrata <br>"; 
    }

    // Método abstrato
    abstract public function testeAbs ();

}

// Não podemos instanciar uma classe abstrata
//$t = new Teste;

// Usando o método de uma classe abstrata sem instanciar
// ISSO SÓ PODE ACONTECER CASO O MÉTODO FOR STATIC
Teste::testandoClasse();

class Nova extends Teste {

    public function testeAbs () {
        echo "Teste método abstrato <br>";
    }
}

$n = new Nova;

$n->testeAbs();

?>