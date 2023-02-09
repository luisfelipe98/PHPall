<?php

// Parâmetro com mais de um valor
// Para recebe-los no backend, o melhor é criar um array com essas informações

if (isset($_POST["ingredientes"])) {
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testando input com multiplos valores</title>
</head>
<body>
    <form method="POST" action="input_multi_values.php">
        <div>
            <input type="checkbox" name="ingredientes[]" value="Tomate">Tomate
        </div> 
        <div>
            <input type="checkbox" name="ingredientes[]" value="Abobora">Abobora
        </div>
        <div>
            <input type="checkbox" name="ingredientes[]" value="Feijão">Feijão
        </div>
        <div>
            <input type="checkbox" name="ingredientes[]" value="Alface">Alface
        </div>
        <div>
            <input type="checkbox" name="ingredientes[]" value="Cebola">Cebola
        </div>
        <div>
            <input type="submit" value="Enviar">
        </div>
    </form>
</body>
</html>