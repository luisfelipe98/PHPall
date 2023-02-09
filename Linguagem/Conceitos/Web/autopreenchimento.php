<?php

// Auto preenchimento é usado muito na edição de alguma informação
// Exemplos: Edição de um usuário, livro, carro etc
// Com isso, as informações vem já preenchidas dentro do atributo value de um input 

$usuario = [
    "nome" => "Laura",
    "idade" => 25,
    "profissao" => "Adestradora"
];

if (isset($usuario)) {
    $nome = $usuario["nome"];
    $idade = $usuario["idade"];
    $profissao = $usuario["profissao"];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="">
      <div>
        <input type="text" name="nome" value="<?= $nome; ?>">
      </div>
      <div>
        <input type="text" name="idade" value="<?= $idade; ?>">
      </div>
      <div>
        <input type="text" name="profissao" value="<?= $profissao; ?>">
      </div>
      <div>
        <input type="submit" value="Atualizar">
      </div>  
    </form>
</body>
</html>