<?php

// Constantes são propriedades que NÃO mudam seu valor
// Ou seja, são definadas e NÃO PODEM SER ALTERADAS
// Para acessa-las, utilizaremos os :: 

class Humano {

    // Declaração de constantes
    public const OLHOS = 2;
    public const BRACOS = 2;
    public const PERNAS = 2;

    function mostrarConstante() {
        echo self::PERNAS . "<br>"; // Acessando constantes dentro do método do próprio objeto
    }
}

$luis = new Humano;

// Acessando uma constante
echo $luis::OLHOS . "<br>";
echo $luis->mostrarConstante();

?>