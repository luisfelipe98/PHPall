<?php

// Converter dados para Int e ver o que aparece

// Dado 1: "testando"
$a = (int) "testando";
echo $a . "<br>";

// Dado 2: 12.9
$a = (int) 12.9;
echo $a . "<br>";

// Dado 3: true
$a = (int) true;
echo $a . "<br>";

// Dado 4: [1,2,3]
$a = (int) [1,2,3];
echo $a . "<br>";

?>