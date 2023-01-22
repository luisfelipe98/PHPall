<?php

// Escopo de variáveis
// É um jeito de não embaralhar suas variáveis
// Escopo tem 3 tipos
// Escopo local, global e static

// Escopo local
// É um escopo definido DENTRO de uma função
// Não é acessível fora desta função
// Quando a função é finalizada, o valor da variável é RESETADO

$x = 5.2;
echo "O valor da variável FORA da função é " . $x . "<br>";

function escopoLocal(){
    $x = 9.1;
    echo "O valor da variável LOCAL DENTRO da função é " . $x . "<br>";
}

escopoLocal() . "<br>"; // Chamando a função para exibir seu resultado
echo "O valor da variável DEPOIS de passar pela função é " . $x . "<br>";

// Escopo Global
// São variáveis declaradas FORA da função
// Precisamos por a palavra GLOBAL antes da variável para utiliza-la
// Por padrão, ela NÃO É ACESSADA dentro de uma função

$teste = "Camisa";
echo "Variável no global é " . $teste . "<br>";

if (true){
    $teste = "Roupa";
    echo "Variável no if é " . $teste . "<br>";
}

echo "Variável DEPOIS do if é " . $teste . "<br>";
// Neste caso o if ALTERA O VALOR da variável
// Agora
// Chamando uma variável GLOBAL DENTRO DE UMA FUNÇÃO E ALTERANDO SEU RESULTADO 

$teste = "Jeans";
echo "Variável no global é " . $teste . "<br>";

function escopoGlobal(){
    global $teste; // Transformando em uma variável global
    $teste = "Shorts";
    echo "Variável GLOBAL alterada DENTRO da função é " . $teste . "<br>";
}

escopoGlobal() . "<br>"; 
echo "Variável GLOBAL DEPOIS da função é " . $teste . "<br>";

// Conclusão
// Uma função PODE ALTERAR VALOR DE UMA VARIÁVEL GLOBAL se você transforma-la em GLOBAL

// Escopo Static
// São variáveis de escopo LOCAL mantendo seu valor depois da função ser utilizada
// O padrão é RESETAR, mas o static MANTÉM o valor da variável
// Usamos a palavra static antes da variável
// Por manter o resultado, conseguimos utiliza-la em MAIS DE UMA FUNÇÃO

function teste(){
    $a = 0;
    $a++; // Adicionando 1 ao valor da variável
    echo "Valor da variável é " . $a . "<br>";
}

teste() . "<br>";
teste() . "<br>";

// Não continuou adicionando e manteve o resultado inicial

function staticTeste(){
    static $a = 0; // Tranformando em uma variável static
    $a++; 
    echo "Valor da variável é " . $a . "<br>";
}

staticTeste() . "<br>";
staticTeste() . "<br>";
staticTeste() . "<br>";

// A variável manteve o resultado e continuou somando
?>