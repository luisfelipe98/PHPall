<?php

// O PHP permite o uso de herança por herança, mas especificando a classe
// Para isso que serve os traits
// Com isso, conseguimos ver de forma clara e objetiva de qual trait estamos herdando
// A Trait pode ser usada para fazer um código específico
// Exemplos

trait Objeto { // Essa é a Trait

    public function teste() {
        echo "Testando trait de objeto <br>";
    }
}

trait Testando {

    public $y = 10;

    public function traitTeste() {
        echo "Este método é da trait Testando <br>";
    }
}

class Central {

    // Usando as traits, com isso , tenho como usar o que estiver dentro da trait
    use Objeto; 
    use Testando;
}

$x = new Central;

$x->teste();

$x->traitTeste();

echo $x->y . "<br>";

?>