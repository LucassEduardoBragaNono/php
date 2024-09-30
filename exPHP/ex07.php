<?php
$resultado = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numeros = $_POST["numeros"];
    
    
    $arrayNumeros = array_map('trim', explode(',', $numeros));

    $arrayNumeros = array_filter($arrayNumeros, 'is_numeric');

    if (count($arrayNumeros) > 0) {
        $media = array_sum($arrayNumeros) / count($arrayNumeros);
        $resultado = "A média dos números é: " . number_format($media, 2);
    } else {
        $resultado = "Por favor, insira pelo menos um número válido.";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Cálculo da Média</title>
</head>
<body>
    <form method="post">
        <h1>Cálculo da Média</h1>
        <label for="numeros">Digite os números (separados por vírgula):</label>
        <input type="text" id="numeros" name="numeros" required>
        <button type="submit">Calcular Média</button>
        <button type="reset">Limpar</button>
        <p>Resultado: <?php echo $resultado; ?></p>
    </form>
</body>
</html>
