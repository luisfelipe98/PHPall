<?php 

    echo 10 . "<br>";
    echo 15 . "<br>";
    echo 10 + 56 . "<br>";

    //Checagem se o número é inteiro
    // Função is_int() que retorna valor booleano
    
    // Exemplo positivo de numero inteiro
    $numero = 43;
    if (is_int($numero)){
        echo $numero . " é inteiro <br>";
    }else{
        echo $numero . " não é inteiro <br>";
    }

    // Exemplo negativo de numero inteiro
    $numero = 5.6;
    if (is_int($numero)) {
        echo $numero . " é inteiro <br>";
    } else {
        echo $numero . " não é inteiro <br>";
    }

?>