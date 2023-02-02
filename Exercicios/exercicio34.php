<?php

// Transformar essa frase 
// "este item está em promoção" 
// em
// "Este item está em PROMOÇÃO"
// Sem usar caixa alta ou baixa manualmente, só com funções

$frase1 = "este item está em ";
$frase2 = "promoção";

echo ucfirst($frase1) . strtoupper($frase2);
?>