<?php

// Criar um classe Cachorro com o construtor
// Exibir na tela suas propriedades através de métodos

class Cachorro {

    private $nome;
    private $genero; 
    private $raca;
    private $cor;
    private $pernas;

    function __construct ($nome, $genero, $raca, $cor, $pernas) {
        $this->nome = $nome;
        $this->genero = $genero;
        $this->raca = $raca;
        $this->cor = $cor;
        $this->pernas = $pernas;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getGenero() {
        if ($this->genero === "M" || $this->genero === "m") {
            return "Macho";
        } else {
            return "Fêmea";
        }
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

$cachorro = new Cachorro("Zeca", "M", "Spitz Alemão", "Branco", 4);

if ($cachorro->getGenero() === "Macho") {
    echo "Ficha do cachorro: <br>";
} else {
    echo "Ficha da cadela: <br>";
}

echo "Nome: " . $cachorro->getNome() . "<br>";
echo "Raça: " . $cachorro->getRaca() . "<br>";
echo "Gênero: " . $cachorro->getGenero() . "<br>";
echo "Cor: " . $cachorro->getCor() . "<br>";
echo "Pernas: " . $cachorro->getPernas() ."<br> <br>";

$cachorro = new Cachorro("Grafite", "m", "Labrador", "Preto", 4);

if ($cachorro->getGenero() === "Macho") {
    echo "Ficha do cachorro: <br>";
} else {
    echo "Ficha da cadela: <br>";
}

echo "Nome: " . $cachorro->getNome() . "<br>";
echo "Raça: " . $cachorro->getRaca() . "<br>";
echo "Gênero: " . $cachorro->getGenero() . "<br>";
echo "Cor: " . $cachorro->getCor() . "<br>";
echo "Pernas: " . $cachorro->getPernas() ."<br> <br>";

$cachorro = new Cachorro("Beatriz", "F", "Spitz Alemão", "Marrom", 4);

if ($cachorro->getGenero() === "Macho") {
    echo "Ficha do cachorro: <br>";
} else {
    echo "Ficha da cadela: <br>";
}

echo "Nome: " . $cachorro->getNome() . "<br>";
echo "Raça: " . $cachorro->getRaca() . "<br>";
echo "Gênero: " . $cachorro->getGenero() . "<br>";
echo "Cor: " . $cachorro->getCor() . "<br>";
echo "Pernas: " . $cachorro->getPernas() ."<br> <br>";

$cachorro = new Cachorro("Bingo", "m", "Golden Retriever", "Amarelo", 4);

if ($cachorro->getGenero() === "Macho") {
    echo "Ficha do cachorro: <br>";
} else {
    echo "Ficha da cadela: <br>";
}

echo "Nome: " . $cachorro->getNome() . "<br>";
echo "Raça: " . $cachorro->getRaca() . "<br>";
echo "Gênero: " . $cachorro->getGenero() . "<br>";
echo "Cor: " . $cachorro->getCor() . "<br>";
echo "Pernas: " . $cachorro->getPernas() ."<br> <br>";

?>