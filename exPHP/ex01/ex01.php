<?php
$resultado= '';

if ($_POST) {
    $valor1 = isset($_POST['valor1']) ? floatval($_POST['valor1']) : 0;
    $valor2 = isset($_POST['valor2']) ? floatval($_POST['valor2']) : 0;
    $resultado = $valor1 + $valor2;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular soma com PHP</title>
</head>
<body>
    <h1>Calcular soma</h1>
    <form action="" method="POST">
        <label for="valor1">Valor 1:</label>
        <input type="text" name="valor1" placeholder="Digite o primeiro número" id="valor1" required><br/>
        <label for="valor2">Valor 2:</label>
        <input type="text" name="valor2" placeholder="Digite o segundo número" id="valor2" required><br/>

        <button type="submit" id="somar">+</button>
        <button type="reset" id="limpar">Limpar</button>

        <p>Resultado: <?php echo $resultado; ?></p>
    </form>
</body>
</html>
