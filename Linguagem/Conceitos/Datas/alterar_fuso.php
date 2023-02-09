<?php

// Alteração de Fuso Horário
// Por padrão, o fuso do horário do PHP vem da máquina de onde está o servidor
// Para alterar manualmente, utilizamos a função date_default_timezone_set()
// Recebe o novo fuso horário como parâmetro em string
// Exemplos

// Usando a função
date_default_timezone_set("America/Sao_Paulo");

$data = new DateTime();

echo "<pre>";
print_r($data);
echo "</pre>";

?>