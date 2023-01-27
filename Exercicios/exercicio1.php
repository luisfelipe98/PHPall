<?php

// Exercicio criando um array associativo com informações de um carro e exibir, pelo menos, duas características

$carro = ['nome' => 'Jetta',
          'marca' => 'Preto',
          'motor' => 1.5,
          'combustível' => 'Gasolina'];

echo "Características de um carro <br>";
echo "Nome: " . $carro['nome'] . "<br>";
echo "Cor: " . $carro['marca'] . "<br>";

?>