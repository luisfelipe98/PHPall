<?php

// Include é um código para inserir um outro arquivo dentro de outro
// Podemos por um arquivo .html dentro de um PHP
// Quando o arquivo não existir, dá um Warning, mas deixa executar a página
// NÃO ESQUECER DE POR O CAMINHO DO DIRETÓRIO DO ARQUIVO CASO TENHA

// Exemplos

include "teste.php";
include "cabecalho.html";
include "logica.php";

// include_once só faz o include UMA VEZ para evitar a repetição de código
// É o mais indicado

// Exemplos
include_once "../Exercicios/exercicio1.php";
include_once "../Exercicios/exercicio15.php";

?>