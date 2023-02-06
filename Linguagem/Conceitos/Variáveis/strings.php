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

$texto = "Olá, meu nome é Luis <br>";
print($texto);

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

?>