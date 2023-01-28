<?php 

// Loops são estruturas de repetição
// Muito utilizados em arrays
// Comandos break e/ou continue são utilizados neles
// Comando break serve para sair de um loop
// Comando Continue serve para pular uma execução do loop
// Sempre utilizar um contador para não virar loop infinito

// Exemplos

// While

echo "Loop com o While <br>";

$cont = 1;

while ($cont != 11) {
    if ($cont === 1) {
        echo "Passando pelo loop " . $cont ." vez <br>";
        $cont++;
    } 
    
    echo "Passando pelo loop " . $cont ." vezes <br>";
    $cont++;
}
echo "Saiu do loop do while <br>";


















































// Loop Alinhado
// São loop dentro de outro loop
// É bom cada um ter seu contador
// Cuidado com os loops infinitos

echo "Loop Alinhado <br>";
$cont1 = 1; // 1º contador
$qtdeExe = 1; // Contador para descobrir quantas execuções de todos os loops
while ($cont1 <= 10) {
    if ($cont1 === 1) {
       echo $qtdeExe . " - Passando pelo loop externo " . $cont1 . " vez <br>"; 
    } else {
       echo $qtdeExe . " - Passando pelo loop externo " . $cont1 . " vezes <br>";
    }
    
    $cont2 = 1; // Segundo contador
        while ($cont2 <= 5) {
            $qtdeExe++;
            if ($cont2 === 1) {
                echo $qtdeExe . " - Passando pelo loop interno " . $cont2 . " vez <br>";
                $cont2++;
            } else {
                echo $qtdeExe . " - Passando pelo loop interno " . $cont2 . " vezes <br>";
                $cont2++;
            }
        }
    $cont1++;
    $qtdeExe++;
    echo "<br>";
}
echo "Saiu do loop alinhado <br>";
?>