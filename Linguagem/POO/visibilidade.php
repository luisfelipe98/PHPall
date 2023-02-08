<?php

// Visibilidade é a forma de como podemos "ver" métodos e propriedades
// É a forma de como o PHP coordena quem e como vai poder alterar/utilizar métodos e propriedades
// É uma forma de segurança, proteção
// Existem três tipos de visibilidade: Public, Protected e Private 
// Public é a forma onde qualquer um pode acessar/alterar um método e/ou propriedade
// Protected é a forma onde só pode ser acessada pela classe de origem ou as que recebem a mesma de herança 
// Private é a forma onde só pode ser acessado apenas pela classe que a criou


class Car {

    public $rodas = 4;
    private $vidro = "sem película";
    protected $portas = 4;

    public function vidroDeFabrica($pelicula) {
        $this->vidro = $pelicula;
    }

    public function getVidro() {
        return $this->vidro;
    }

    public function getPortas() {
        return $this->portas;
    }
}

class Mecanico {

    public function alterarRodas ($objeto) {
        $objeto->rodas = 10;
    }

    public function colocarPelicula ($objeto, $pelicula) {
        $objeto->vidro = $pelicula; 
    }

}

$carro = new Car;

echo $carro->rodas . "<br>";

$luis = new Mecanico;

$luis->alterarRodas($carro); // Passando o objeto para outra classe
echo $carro->rodas . "<br>";

// Não pode alterar porque é privado e não aceita alteração por outro objeto
// $luis->colocarPelicula($carro, "G20");

// Não consegue alterar porque a propriedade é PRIVADA
// $carro->vidroDeFabrica("G10"); 

// Não pode exibir uma propriedade porque a mesma é PRIVADO
// echo $carro->vidro . "<br>";

// O melhor jeito de aceesar uma propriedade privada é através de um método da PRÓPRIA CLASSE
echo $carro->getVidro() . "<br>";

// Não dá pra alterar porque é uma propriedade privada
// $carro->vidro = "G14";

// Não pode acessar propriedade protected
// echo $carro->portas . "<br>";

// O melhor jeito de aceesar uma propriedade protected é através de um método da PRÓPRIA CLASSE
echo $carro->getPortas() . "<br>";

?>