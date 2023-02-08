<?php

// Criar uma classe com um método e duas propriedades e exibi-las na tela

class Pessoa {
    public $nome;
    public $idade;

    function andar($m) {
        echo "Pessoa andou " . $m . " metros <br>";
    }
}

$leticia = new Pessoa;

$leticia->nome = "Leticia";
$leticia->idade = 30;

echo "O nome dela é " . $leticia->nome . " e tem " . $leticia->idade . " anos <br>";
$leticia->andar(50);

$joaquim = new Pessoa;

$joaquim->nome = "Joaquim";
$joaquim->idade = 22;

echo "O nome dele é " . $joaquim->nome . " e tem " . $joaquim->idade . " anos <br>";
$leticia->andar(200);

?>