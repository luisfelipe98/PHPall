<?php

// Criar um array
// Desconstruir ele e exibir seus valores na tela

$carro = ["Jaguar", 3.0, "azul", 18, "flex", "automático"];

list ($marca, $motor, $cor, $aro, $combustivel, $cambio) = $carro;

echo "Carcterísticas de um carro: <br>";
echo "Marca: " . $marca . "<br>";
echo "Motor: " . $motor . "<br>";
echo "Cor: " . $cor . "<br>";
echo "Aro: " . $aro . " polegadas <br>";
echo "Combustível: " . $combustivel . "<br>";
echo "Cambio: " . $cambio . "<br>";

?>