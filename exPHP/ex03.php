<?php
    $resultado = '';

    if($_POST)
    {
        $valor1 = $_POST['valor1'];
        $valor2 = $valor1;
    
        if ($valor2 % 2 === 0) {
            $resultado = "O número $valor2 é par";
        } else {
            $resultado = "O número $valor2 é ímpar";
        }
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Verificar par ou ímpar</title>
</head>
<body>
    <form action="" method="POST">
    <h1>Par ou ímpar</h1>
        <label for="valor1">Digite o número:</label>
        <input type="text" name="valor1" placeholder="Digite o número" id="valor1" required><br/>

        <button type="submit">Par/Ímpar</button>
        <button type="reset">Limpar</button>

        <p>Resultado: <?php echo $resultado ?></p>
    </form>
</body>
</html>