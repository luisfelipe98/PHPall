<?php

// Propriedades são as variáveis de um objeto

class Car {

    public $rodas;
    public $aro = 20;
    public $cor = "vermelha";

    function ligar() {
        echo "Vruuummmm <br>";
    }

}

$ferrari = new Car;

// Mudando o valor de uma propreidade
$ferrari->rodas = 4;
$ferrari->cor = "azul";

// Acessando as propriedades
echo $ferrari->aro . "<br>";
echo $ferrari->rodas . "<br>";
echo $ferrari->cor . "<br>";

$ferrari->ligar();

?>