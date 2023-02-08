<?php

// Construtor serve para inicializar um objeto com valores de propriedades únicos para cada objeto
// Passamos os argumentos como parâmetro
// Exemplos

class Car {
    
    private $portas;
    private $cor;
    private $marca;

    // Construtor
    function __construct ($portas, $cor, $marca) {
        $this->portas = $portas;
        $this->cor = $cor;
        $this->marca = $marca;    
    }

    public function getPortas() {
        return $this->portas;
    }

    public function getCor() {
        return $this->cor;
    }

    public function getMarca() {
        return $this->marca;
    }

}

// Instanciando uma classe que tem construtor
$carro = new Car (4, "vermelha", "Ferrari");

echo "O carro da marca " . $carro->getMarca() . " tem a cor " . $carro->getCor() . "<br>"; 

$carro = new Car (4, "verde", "BMW");

echo "O carro da marca " . $carro->getMarca() . " tem a cor " . $carro->getCor() . "<br>"; 

?>