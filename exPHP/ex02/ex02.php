<?php
    $resultado = '';

    if ($_POST) {
        $valor1 = isset($_POST['valor1']) ? floatval($_POST['valor1']) : 0;
        $resultado = $valor1*$valor1;
    }   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quadrado de um número</title>
</head>
<body>
    <h1>Numero ao quadrado</h1>
    <form>
    <form action="" method="POST">
        <label for="valor1">Digite o número:</label>
        <input type="text" name="valor1" placeholder="Digite o número" id="valor1" required><br/>

        <button type="submit" id="somar">+</button>
        <button type="reset" id="limpar">Limpar</button>

        <p>Resultado: <?php echo $resultado?></p>
    </form>
</body>
</html>