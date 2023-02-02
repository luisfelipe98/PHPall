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

// Função printf
// Semelhante ao print
// Ela consegue imprimir valores dinâmicos através do símbolo de %
/* Exemplos
   %f = float
   %d = int
   $s = string
   etc
*/ 

$nome = "Antonio";
$num = 1000;
$temperatura = 39.5;

printf("Meu nome é %s <br>", $nome);
printf("Um número é %d e o outro é %d <br>", 10, $num);
printf("A temperatura está em %.1f ºC <br>", $temperatura);

// Função Strlen
// Serve para mostrar a quantidade de caracteres de uma string
// CONTA ESPAÇO EM BRANCO
// Retorna um valor int

$string1 = "Esta string é muito grande";
$string2 = "Esta não";

echo "A 1ª string tem " . strlen($string1) . " caracteres <br>";
echo "A 2ª string tem " . strlen($string2) . " caracteres <br>";

// Percorendo uma String
// Fazer uma estrutura de repetição 
// Exemplo

$string = "Quantidade de caracteres de uma string";
$tamString = strlen($string);

$cont = 0;
while ($cont < $tamString) {
   if ($tamString - 1 === $cont ) { 
      echo $string[$cont] . " <br>";
      $cont++;
   } else if ($string[$cont] === " ") {
      echo "- ";
      $cont++;
   } else {
      echo $string[$cont] . " ";
      $cont++;
   }   
}

// Limpando uma string
// Quer dizer remover espaços antes e depois de uma string
// Tem 3 funções especifícas para isso
// Trim, rtrim e ltrim
// Trim elimina espaços de antes e depois da string
// Ltrim elimina espaços do começo da string
// Rtrim elimina espaços do término da string
// Exemplos

$string1 = "   Luis   ";
$string2 = "   Carolina";
$string3 = "Mateus   ";

$cleanString1 = trim($string1);
$cleanString2 = ltrim($string2);
$cleanString3 = rtrim($string3);

// Mostrando que as strings estão limpas
for ($i = 0; $i < strlen($cleanString1); $i++) {
   if ($cleanString1[$i] === " ") {
      echo "-";
   } else {
      echo $cleanString1[$i];
   }
}
echo "<br>";

for ($i = 0; $i < strlen($cleanString2); $i++) {
   if ($cleanString2[$i] === " ") {
      echo "-";
   } else {
      echo $cleanString2[$i];
   }
}
echo "<br>";

for ($i = 0; $i < strlen($cleanString3); $i++) {
   if ($cleanString3[$i] === " ") {
      echo "-";
   } else {
      echo $cleanString3[$i];
   }
}
echo "<br>";

// Alterando o case das palavras
// Seria por as palavras com todos os caracteres maiúsculos ou minúsculos
// Para isso, tem duas funções
// Strtolower e strtoupper
// Strtolower deixa todos os caracteres minúsculos
// Strtoupper deixa todos os caracteres maiúsculos
// Exemplos

$stringUpper = "CARACTERES MAIUSCULOS";
$stringLower = "caracteres minusculos";

echo "Invertendo " . $stringUpper . " para " . strtolower($stringUpper) . "<br>";
echo "Invertendo " . $stringLower . " para " . strtoupper($stringLower) . "<br>";

// Mais duas funções para alterar case de palavras
// Ucfirst e Ucwords
// Ucfirst deixa maiúsculo a PRIMEIRA LETRA DA STRING
// UCwords deixa maiúsculo a PRIMEIRA LETRA DE CADA PALAVRA DA STRING
// Exemplos

$string1 = "testando se a primeira letra da frase ficará maiúscula";
$string2 = "testando se a primeira letra de cada palavra ficará maiúscula";

echo ucfirst($string1) . "<br>";
echo ucwords($string2) . "<br>";

// Função Strip_tags
// Remove tags do HTML e deixa em texto puro
// Exemplo

$string = "<li><p class='x'>Testando frase no strip tags</p></li>";
echo strip_tags($string) . "<br>";

// Função Substr
// Faz a função de resgatar parte de uma string
// substr (string, inicio, tamanho da substring)
// Exemplos

$string = "Esta é minha string";

// Vamos dizer que quero pegar a palavra minha

$minha = substr($string, 8, 5); // String, Onde começa, tamanho da nova string 

echo $minha . "<br>";

// Podemos passar no comprimento número negativo

$minhaString2 = substr($string, 8, -3); // Vai tirar três caracteres do FINAL da string

echo $minhaString2 . "<br>";

// Função Strrev
// Inverte a string
// Exemplo

$string = "palavra";
$stringReversa = strrev($string);

echo "A palavra \"" . $string . "\" invertida é " . $stringReversa . "<br>";

// Função Str_repeat
// Serve para repetir uma string n vezes
// Str_repeat(string, quantidade de repetições)
// Exemplo

$string = "php";
$stringRepetida = str_repeat($string,5);

echo $stringRepetida . "<br>";

// Função Explode
// Serve para converter uma string em array
// explode(separador da string, string)
// O delimitador PRECISA EXISTIR NA STRING, SENÃO VIRA ARRAY DE UMA FRASE
// Exemplo

$string = "O programador tava sem tempo para fazer o sistema";
$stringParaArray = explode(" ", $string);

echo "<pre>";
print_r($stringParaArray);
echo "</pre>";

// Função Implode
// Serve para converter um array em string
// implode(separador da string, string)
// Exemplo

$array = ["Maça", "Banana", "Laranja", "Uva", "Pera", "Abacaxi", "Coco"];

$string = implode(" ", $array);

echo $string . "<br>";

// Função Strpos
// Serve para encontrar A PRIMEIRA OCORRÊNCIA de uma string dentro de outra string
// Strpos(string, o que quero encontrar)
// O RETORNO DA FUNÇÃO DÁ O NÚMERO COMO SE FOSSE PARTE DE UM ARRAY
// ELE ENCONTRA NÃO SÓ PALAVRAS COMPLETAS, MAS PEDAÇOS DE STRING
// Retorna dois tipos de dados
// Int se encontrar a palavra (será o índice de onde começa a palavra/frase)
// Boolean se não encontrar nada
// Exemplos

$string = "Estamos testando o método strpos, com o strpos podemos encontrar strings";

$testeEncontrar = strpos($string, "strpos");

echo $testeEncontrar . "<br>";

$testeEncontrar2 = strpos($string, "Java");

// Testando para ver se deu false
if ($testeEncontrar2 === false) {
   echo "Palavra não encontrada <br>"; 
}

$testeEncontrar3 = strpos($string, "mo");

echo $testeEncontrar3 . "<br>";

// Função Strrpos
// Serve para encontrar A ÚLTIMA OCORRÊNCIA de uma string dentro de outra string
// Strrpos(string, o que quero encontrar)
// O RETORNO DA FUNÇÃO DÁ O NÚMERO COMO SE FOSSE PARTE DE UM ARRAY
// ELE ENCONTRA NÃO SÓ PALAVRAS COMPLETAS, MAS PEDAÇOS DE STRING
// Retorna dois tipos de dados
// Int se encontrar a palavra (será o índice de onde começa a palavra/frase)
// Boolean se não encontrar nada
// Exemplos

$string = "Estamos testando o método strpos, com o strpos podemos encontrar strings";

$testeEncontrar = strrpos($string, "strpos");

echo $testeEncontrar . "<br>";

$testeEncontrar2 = strrpos($string, "Java");

// Testando para ver se deu false
if ($testeEncontrar2 === false) {
   echo "Palavra não encontrada <br>"; 
}

$testeEncontrar3 = strrpos($string, "mo");

echo $testeEncontrar3 . "<br>";
?>