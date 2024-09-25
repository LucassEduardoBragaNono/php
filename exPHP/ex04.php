<?php
    $resultado = '';
    $erro = '';

    if ($_POST) {
        $texto = $_POST['texto'];

        if (ctype_alpha($texto)) {
            $resultado = strlen($texto);
        } else {
            $erro = "Erro: Digite apenas letras.";
        }
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Tamanho da string</title>
</head>
<body>
    
    <form action="" method="POST">
        <h1>Tamanho do texto</h1>
        <label for="texto">Digite o texto:</label>
        <input type="text" name="texto" placeholder="Digite o texto" id="texto" required><br/>

        <button type="submit">Tamanho</button>
        <button type="reset">Limpar</button>

        <p>Resultado: <?php echo $resultado ?></p>
        <p style="color: red;"><?php echo $erro ?></p>
    </form>
</body>
</html>