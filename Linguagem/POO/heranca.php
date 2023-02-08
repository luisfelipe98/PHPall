<?php

// Herança é um recurso do POO onde um classe herda propriedades e métodos da outra classe
// Protected NÃO HERDA, só fica na classe "pai"
// A palavra reservada é extends

class Humano {

    public $idade = 20;

    public function falar() {
        echo "Hello World! <br>";
    }

    private function gritar() {
        echo "O PHP É MUITO BOM !!! <br>";
    }

    public function acessarGritar() {
        return $this->gritar();
    }

    protected function falarBaixinho() {
        echo "lalalalala <br>";
    }

    public function acessarFalarBaixinho() {
        return $this->falarBaixinho();
    }
}

class Programador extends Humano {

    public function acessarFalarBaixinhoProgramador() {
        $this->falarBaixinho(); // Pegando um método protected da classe "Pai"
    }
}

$ze = new Humano;

$ze->falar();
$ze->acessarGritar();
$ze->acessarFalarBaixinho();

$mateus = new Programador;

echo $mateus->idade . "<br>";

$mateus->falar();
$mateus->acessarGritar();
$mateus->acessarFalarBaixinhoProgramador();

?>