<?php

// Converter o array
// ["O", "PHP", "é", "muito", "legal!"]
// para string

$array = ["O", "PHP", "é", "muito", "legal!"];

$string = implode(" ", $array);

echo $string;
?>