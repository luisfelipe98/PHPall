<?php 

// Loops são estruturas de repetição
// Muito utilizados em arrays
// São destes tipo: For, Foreach, Do While, While e Loops Alinhados
// Comandos break e/ou continue são utilizados neles
// Comando break serve para sair de um loop
// Comando Continue serve para pular uma execução do loop
// SEMPRE INCREMENTAR OU DECREMENTAR ANTES DE UM CONTINUE
// Sempre utilizar um contador para não virar loop infinito

// Exemplos

// Exemplo de Break e Continue
// Um loop decrementado com Break no 1 e Continue 3 e 6

echo "Loop com Break e Continue <br> <br>";
$cont = 10;

while ($cont != 0) {
    if ($cont === 1) {
        break;
    } else if ($cont === 3 || $cont === 6) {
        $cont--;
        continue;
    } else {
        echo "Passando pelo loop número " . $cont . "<br>";
        $cont--;
    }
}
echo "<br>";
echo "Saiu do loop com Break e Continue";
echo "<br><br><br>";

?>