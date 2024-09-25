<?php
    $resultado = '';

    if ($_POST) {
        $valor1 = $_POST['valor1'];
        $resultado = $valor1 * $valor1;
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Quadrado de um número</title>
</head>
<body>
    
    <form action="" method="POST">
        <h1>Numero ao quadrado</h1>
        <label for="valor1">Digite o número:</label>
        <input type="text" name="valor1" placeholder="Digite o número" id="valor1" required><br/>

        <button type="submit">Quadrado</button>
        <button type="reset">Limpar</button>

        <p>Resultado: <?php echo $resultado ?></p>
    </form>
</body>
</html>
