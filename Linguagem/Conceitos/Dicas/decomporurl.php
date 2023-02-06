<?php

// Função Parse_url
// Serve para decompor uma URL
// Retorna um array

$url = "https://www.google.com?search?q=php";

$arrayUrl = parse_url($url);

echo "<pre>";
print_r($arrayUrl);
echo "</pre>";

$url = "https://www.google.com/usuarios/Luis?id=13&nome=Luis";

$arrayUrl = parse_url($url);

echo "<pre>";
print_r($arrayUrl);
echo "</pre>";
?>