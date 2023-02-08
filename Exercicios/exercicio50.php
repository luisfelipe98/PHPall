<?php

// Criar um classe Cachorro com o construtor
// Exibir na tela suas propriedades através de métodos

class Cachorro {

    private $pernas;
    private $nome;
    private $raca;
    private $cor;

    function __construct ($nome, $raca, $cor, $pernas) {
        $this->nome = $nome;
        $this->raca = $raca;
        $this->cor = $cor;
        $this->pernas = $pernas;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getRaca() {
        return $this->raca;
    }

    public function getCor() {
        return $this->cor;
    }

    public function getPernas() {
        return $this->pernas;
    }

}

$cachorro = new Cachorro("Zeca", "Spitz Alemão", "Branco", 4);

echo "Ficha do cachorro: <br>";
echo "Nome: " . $cachorro->getNome() . "<br>";
echo "Raça: " . $cachorro->getRaca() . "<br>";
echo "Cor: " . $cachorro->getCor() . "<br>";
echo "Pernas: " . $cachorro->getPernas() ."<br> <br>";

$cachorro = new Cachorro("Grafite", "Labrador", "Preto", 4);

echo "Ficha do cachorro: <br>";
echo "Nome: " . $cachorro->getNome() . "<br>";
echo "Raça: " . $cachorro->getRaca() . "<br>";
echo "Cor: " . $cachorro->getCor() . "<br>";
echo "Pernas: " . $cachorro->getPernas() ."<br> <br>";

$cachorro = new Cachorro("Beatriz", "Spitz Alemão", "Marrom", 4);

echo "Ficha do cachorro: <br>";
echo "Nome: " . $cachorro->getNome() . "<br>";
echo "Raça: " . $cachorro->getRaca() . "<br>";
echo "Cor: " . $cachorro->getCor() . "<br>";
echo "Pernas: " . $cachorro->getPernas() ."<br> <br>";

$cachorro = new Cachorro("Bingo", "Golden Retriever", "Amarelo", 4);

echo "Ficha do cachorro: <br>";
echo "Nome: " . $cachorro->getNome() . "<br>";
echo "Raça: " . $cachorro->getRaca() . "<br>";
echo "Cor: " . $cachorro->getCor() . "<br>";
echo "Pernas: " . $cachorro->getPernas() ."<br> <br>";

?>