<?php

// Criar um array de pelo menos 10 valores e imprimir só as strings

$array = [0,2,54,22.5,"Carlos","a","moto",34,true,false,"Tua","Burrowhead","branco"];
$x = 0;

while ($x != 13) {
    if (is_string($array[$x])) {
        echo $array[$x] . "<br>";
        $x++;
    } else {
        $x++;
    }
}

?>