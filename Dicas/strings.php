<?php 

 // Strings são os textos
 // Não há diferença entre aspas simples e duplas
 // Aspas duplas interpretam variáveis

 // 1º Teste
 $texto1 = 'Testando texto simples';
 $texto2 = "Testando texto duplas";

 // Não mostra o resultado da variável
 echo '$texto1 <br>';
 // Mostra o resultado da variável
 echo "$texto2 <br>";

 // 2º Teste
 // Invertendo as aspas, elas exibem o conteúdo dentro delas
 echo "Ela disse: 'Olá' <br>";
 echo 'Ela disse: "Olá" <br>';

 // Checagem da variável se ela é string ou não
 // Usamos a função is_string()
 // Is_string() retorna um valor booleano

 // Exemplo positivo de string
 $texto = "Texto";
 if (is_string($texto)){
    echo $texto . " é string <br>";
 }else{
    echo $texto . " não é string <br>";
 }

  // Exemplo negativo de string
 $texto = -59;
 if (is_string($texto)){
    echo $texto . " é string <br>";
 }else{
    echo $texto . " não é string <br>";
 }

// Manipulação de Strings

// Interpolação de Strings
// Pode ser feito em duas formas
// Dentro de "" ou em {}

// Exemplos
$teste = "teste";

echo "Interpolando variável em aspas duplas $teste <br>";
echo "Interpolando variável em chaves {$teste} <br>";

// Ambas não tem diferença em questão de performance

// Valores de escape
// É obrigatório utilizar "" (aspas duplas)
/* Exemplos
   \n = nova linha
   \t = tab
   \\ = barra invertida
   \$ = símbolo do dolar
   etc
*/ 

// É bem utilizado em sistemas que respondem com o PHP
// É utilizado em sistemas de texto puro, não tem necessidade se for na Web

// Função print
// Semelhante ao echo
// Ela imprime uma string que foi passada como argumento

$texto = "Olá, meu nome é Luis <br>";
print($texto);
?>