<?php

// This se refere a instância atual do objeto
// É um recurso muito forte na POO
// Podemos utilizar tanto em propriedades como em métodos também

class Animal {

    public $nome;

    function escolherNome($nome) {
        $this->nome = $nome; // Passando o valor da variável nome para a propriedade nome atráves do this
    }

    function latir() {
        return "au au <br>";
    }

    function latirForte() {
        return strtoupper($this->latir()); // Usando this para invocar um método
    }
}

$frida = new Animal;

// O animal não terá nome porque não foi definido seu nome
echo "O nome do animal é " . $frida->nome . "<br>";

$frida->escolherNome("Frida");

// Agora o nome será exibido porque foi definido
echo "O nome do animal é " . $frida->nome . "<br>";

echo $frida->latir();

echo $frida->latirForte();

?>