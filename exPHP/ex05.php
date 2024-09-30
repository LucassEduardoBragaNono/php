<?php
    $resultado = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $palavra = trim($_POST["palavra"]);
    $palavraInvertida = strrev($palavra);

    if (strcasecmp($palavra, $palavraInvertida) === 0) {
        $resultado = "<p>A palavra '<strong>$palavra</strong>' é um palíndromo!</p>";
    } else {
        $resultado = "<p>A palavra '<strong>$palavra</strong>' não é um palíndromo.</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Verificar Palíndromo</title>
</head>
<body>
<form method="post">
    <h1>Verificador de Palíndromo</h1>
    <label for="palavra">Digite uma palavra:</label>
    <input type="text" id="palavra" name="palavra" required>
    <button type="submit">Verificar</button>
    <button type="reset">Limpar</button>

    <p>Resultado: <?php echo $resultado; ?></p>
</form>
</body>
</html>
