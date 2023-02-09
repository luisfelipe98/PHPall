<?php

// Função Strtotime()
// Transforma uma string em data
// Assim, poderá manipula-la

$cincoDias = strtotime("5 days"); 

echo $cincoDias . "<br>";

$dezDias = strtotime("10 days"); 

echo $dezDias . "<br>";

$dataAtualMais5 = date("d/m/y", $cincoDias);

echo $dataAtualMais5 . "<br>";

$dataAtualMais10 = date("d/m/y", $dezDias);

echo $dataAtualMais10 . "<br>";

$doisMeses = strtotime("2 months");

echo $doisMeses . "<br>";

$dataAtualMaisDoisMeses = date("d/m/y", $doisMeses);

echo $dataAtualMaisDoisMeses . "<br>";

$doisAnos = strtotime("2 years");

echo $doisAnos . "<br>";

$dataAtualMaisDoisAnos = date("d/m/y", $doisAnos);

echo $dataAtualMaisDoisAnos . "<br>";

?>