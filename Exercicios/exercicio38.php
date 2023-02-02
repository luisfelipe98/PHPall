<?php 

// Criar um array de 10 a 45 nos elementos
// Somar cada um dos elementos e verificar se for maior que 30
// Se for, apresentar a mensagem de número muito alto

$array = range(10, 45);

for ($i = 0; $i < count($array); $i++) {
    $soma = $array[$i] + 6;
    if ($soma > 30) {
        echo $array[$i] . " + 6 = " . $soma . ", esse valor é muito alto <br>";
    } else {
        echo $array[$i] . " + 6 = " . $soma . "<br>";
    }
}

?>