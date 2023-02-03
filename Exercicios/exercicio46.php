<?php

// Criar uma classe cachorro
// Criar dois métodos
// Executar em mais de um objeto

class Cachorro {
    
    function latir($nomeAnimal) {
        return $nomeAnimal . " está latindo! Au, au, au! <br>";
    }

    function brincar($nomeAnimal) {
        return $nomeAnimal . " está brincando <br>";
    }
}

$tuco = new Cachorro;
$pretinha = new Cachorro;
$zeca = new Cachorro;

// Chamando os métodos
$acao1 = $tuco->brincar("Tuco");
$acao2 = $pretinha->brincar("Pretinha");
$acao3 = $zeca->latir("Zeca");
$acao4 = $tuco->brincar("Tuco");
$acao5 = $pretinha->latir("Pretinha");
$acao6 = $zeca->latir("Zeca");
$acao7 = $tuco->latir("Tuco");
$acao8 = $pretinha->brincar("Pretinha");
$acao9 = $zeca->brincar("Zeca");

// Exibir na tela as ações
echo $acao1;
echo $acao2;
echo $acao3;
echo $acao4;
echo $acao5;
echo $acao6;
echo $acao7;
echo $acao8;
echo $acao9;

?>