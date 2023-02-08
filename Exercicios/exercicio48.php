<?php

// Criar uma classe Carro com algumas propriedades
// Criar dois métodos setVelocidadeMaxima e getVelocidadeMaxima

class Carro {
    public $marca;
    public $qtdeRodas;
    public $cor;
    public $velMax;
    public $tipoCombustivel;

    function getVelocidadeMaxima() {
        return $this->velMax;
    }

    function setVelocidadeMaxima($velMax) {
        $this->velMax = $velMax;
    }

    function getMarca() {
        return $this->marca;
    }

    function setMarca($marca) {
        $this->marca = $marca;
    }

}

$ferrari = new Carro;

// Atribuindo informações para minha classe
$ferrari->setMarca("Ferrari");
$ferrari->qtdeRodas = 4;
$ferrari->cor = "Vermelha";
$ferrari->setVelocidadeMaxima(300);
$ferrari->tipoCombustivel = "Gasolina";

echo $ferrari->getMarca() . " consegue atingir uma velocidade de " . $ferrari->getVelocidadeMaxima() . " km/h <br>";

?>