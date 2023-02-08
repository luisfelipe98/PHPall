<?php

// Criar classe Humano com suas propriedades e o método falar
// Criar classe Professor de herança, com propriedades e métodos próprios
// Exibir valores da classe Humano utilizando SOMENTE A CLASSE PROFESSOR

class Humano {

    protected $nome = "Jorge";
    protected $idade = 43;
    protected $altura = 1.89;
    
    public function getNome() {
        return $this->nome;
    }

    public function getIdade() {
        return $this->idade;
    }

    public function getAltura() {
        return $this->altura;
    }
    
    private function falar() {
        echo "Muito Obrigado";
    }

    public function getFalar() {
        return $this->falar();
    }
}

class Professor extends Humano {

    private $profissao = "Professor";
    private $disciplina = "Matemática";

    public function getProfissao() {
        return $this->profissao;
    }

    public function getDisciplina() {
        return $this->disciplina;
    }
}

$professor = new Professor;

echo "Ficha de uma pessoa: <br>";
echo "Nome: " . $professor->getNome() . "<br>";
echo "Idade: " . $professor->getIdade() . " anos <br>";
echo "Altura: " . $professor->getAltura() . " m <br>";
echo "Profissão: " . $professor->getProfissao() . "<br>";
echo "Disciplina que lecionará: " . $professor->getDisciplina() . "<br>";
echo "Mensagem do " . $professor->getNome() . ": "; 
echo $professor->getFalar() . "<br>";

?>