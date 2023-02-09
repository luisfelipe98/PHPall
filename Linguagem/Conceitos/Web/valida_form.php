<?php

// Validação de formulário
// Devemos SEMPRE checar se os dados que foram enviados condizem com o que é proposto
// Caso não atenda, retornamos uma mensagem ao usuário

$validacoes = [];

if (count($_POST) > 0) {
    if ($_POST["nome"] === "") {
        $validacoes[] = "Por favor preencha o nome do usuário";
    }

    if ($_POST["email"] === "") {
        $validacoes[] = "Por favor preencha o email do usuário";
    }

    if ($_POST["senha"] !== $_POST["confirma_senha"]) {
        $validacoes[] = "As senhas devem ser iguais";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validação Form</title>
</head>
<body>
    <?php if (count($validacoes)): ?>
        <ul>
            <?php foreach ($validacoes as $mensagens): ?>
                <li>
                    <?= $mensagens; ?>
                </li>
            <?php endforeach; ?>    
        </ul>    
    <?php endif; ?>    
    <form action="valida_form.php" method="POST">
        <div>
            <input type="text" name="nome" placeholder="Digite o seu nome">
        </div>
        <div>
            <input type="email" name="email" placeholder="Digite o seu email">
        </div>
        <div>
            <input type="password" name="senha" placeholder="Digite sua senha">
        </div>
        <div>
            <input type="password" name="confirma_senha" placeholder="Confirme sua senha">
        </div>
        <div>
            <input type="submit" value="Enviar">
        </div>
    </form>
</body>
</html>