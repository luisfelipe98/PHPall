<?php

// Objeto DateTime
// Permite tratar a data como um objeto
// Se não passar parâmetro, considera a data ATUAL
// Exemplos

$data = new DateTime();

echo "<pre>";
print_r($data);
echo "</pre>";

// Métodos Format e Modify
// Format formata a data
// Modify altera a data
// Exemplos

$data = new DateTime();

// Data Atual
// Usando o format
echo $data->format("d/m/y") . "<br>";

echo $data->format("D - M - Y") . "<br>";

echo $data->format("l / F / Y") . "<br>";

// Usando o modify
// Data + 5 dias
$data->modify("+ 5 days"); 

echo $data->format("d/m/y") . "<br>";

$data->modify("+ 2 months");

echo $data->format("d/m/y") . "<br>";

$data->modify("- 3 years");

echo $data->format("d/m/y") . "<br>";

?>