<?php

// Variáveis do $_SERVER
// SERVER_SOFTWARE = identificação do software do servidor
// SERVER_NAME = Hostname, DNS e IP do servidor
// SERVER_PROTOCOL = Protocolo do servidor
// SERVER_PORT = Porta do servidor 
// QUERY_STRING = Argumentos que vem depois da URL

// Exemplos

echo "<pre>";
print_r($_SERVER);
echo "</pre>";

// Vendo alguma informação especifica
echo $_SERVER["MYSQL_HOME"] . "<br>";

if ($_SERVER["SERVER_NAME"] == "localhost") {
    echo "Está acessando o localhost <br>";
} else {
    echo "Não está acessando o localhost <br>";
}

?>