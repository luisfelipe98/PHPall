<?php

    // Não faz diferença na hora da execução, mas NÃO É BOA PRÁTICA
    echo                                        "Testando espaço em branco <br>";
    echo "Testando espaço em branco <br>"                          ;

    // É aceitável, mas se for utilizado com instruções maiores;
    echo 
    "Quebra de linha <br>"
    ;
    echo "Quebra de linha <br>"
    ;
    echo 
    "Quebra de
    linha <br>"
    ;

    // Espaços em branco e quebra de linha são ignoradas DESDE QUE NÃO GERE UM ERRO DE CÓDIGO

?>