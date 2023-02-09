<?php

// Upload de arquivos
// Precisaremos de um input tipo file
// Precisamos mudar o enctype de um formulário para multipart/form-data
// Tomar cuidado com o tamanho do arquivo
// Depois do envio, usaremos a variável global $_FILES para ter os dados dos arquivos

if (isset($_FILES)) {
    echo "<pre>";
    print_r($_FILES);
    echo "</pre>";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testando Upload de arquivos</title>
</head>
<body>
    <form action="upload_arquivos.php" method="POST" enctype="multipart/form-data">
        <div>
            <input type="file" name="imagem">
        </div>
        <div>
            <input type="submit" value="Enviar">
        </div>    
    </form>
</body>
</html>