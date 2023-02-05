<?php

    // Floats são números com casas decimais
    // São representados com números com um ponto(.) no meio
    // Exemplos
    echo 2.44 . "<br>";
    echo 13.78 . "<br>";
    echo -4000.78 . "<br>";

    // Checagem se o número é float ou não
    // Usamos a função is_float()
    // Is_float() retorna um valor booleano

    // Exemplo positivo de número float
    $numero = 3.45;
    if (is_float($numero)){
        echo $numero . " é float <br>";
    }else{
        echo $numero . " não é float <br>";
    }
    
    // Exemplo negativo de número float
    $numero = 5;
    if (is_float($numero)){
        echo $numero . " é float <br>";
    }else{
        echo $numero . " não é float <br>";
    }
?>