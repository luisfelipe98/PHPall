<?php

// Require serve "exigir" a inclusão de um arquivo dentro de seu código
// É parecido com o Include, mas se der errado, terá um erro fatal e a página não será executada
// NÃO ESQUECER DE POR O CAMINHO DO DIRETÓRIO DO ARQUIVO CASO TENHA

// Exemplos

require "logica.php";
require "rodape.html";
require "nav.html";
require "../arquivo.ext"; // É o jeito de voltar pasta no PHP

// require_once só faz o require UMA VEZ para evitar a repetição de código
// É o mais indicado

// Exemplos
require_once "../Exercicios/exercicio10.php";
require_once "../Exercicios/exercicio13.php";



?>