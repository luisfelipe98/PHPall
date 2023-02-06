<?php

// Função Strip_tags
// Remove tags do HTML e deixa em texto puro
// Exemplo

$string = "<li><p class='x'>Testando frase no strip tags</p></li>";
echo strip_tags($string) . "<br>";

?>