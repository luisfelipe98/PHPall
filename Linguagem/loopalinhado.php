<?php

// Loop Alinhado
// São loop dentro de outro loop
// É bom cada um ter seu contador
// Cuidado com os loops infinitos

echo "Loop Alinhado <br> <br>";
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