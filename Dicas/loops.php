<?php 

// Loops são estruturas de repetição
// Muito utilizados em arrays
// Comandos break e/ou continue são utilizados neles
// Sempre utilizar um contador para não virar loop infinito

// Exemplos

// While
$cont = 0;

while ($cont != 11) {
    echo "Passando pelo loop " . $cont ."<br>";
    $cont++;
}
echo "Saiu do loop do while <br>";
?>