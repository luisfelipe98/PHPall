<?php

// Usamos o método diff()
// AMBAS AS DATAS TEM QUE TÁ PELO DATETIME
// O resultado pode ser formatado pelo método format
// Exemplo

$dataA = new DateTime();

$dataB = new DateTime();

$dataB->setDate(2001, 10, 15);

echo "<pre>";
print_r($dataA);
echo "</pre>";

echo "<pre>";
print_r($dataB);
echo "</pre>";

// Diferença entre as duas datas
$diferenca = $dataA->diff($dataB); // Diferença da Data A para a Data B 

echo "<pre>";
print_r($diferenca);
echo "</pre>";

// Ver a diferença em dias
echo $diferenca->format("%a days") . "<br>";

?>