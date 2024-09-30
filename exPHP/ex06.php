<?php
$resultado = '';

if ($_POST) {
    $numero = $_POST["numero"];

    if ($numero == 0) {
        $resultado = "0! é = 1";
    } else {
        function fatorial($n) {
            if ($n === 0 || $n === 1) {
                return 1;
            } else {
                return $n * fatorial($n - 1);
            }
        }

        $resultado = fatorial($numero);
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Cálculo de Fatorial</title>
</head>
<body>
<form method="post">
        <h1>Cálculo de Fatorial</h1>
        <label for="numero">Digite um número:</label>
        <input type="number" id="numero" name="numero" min="0" required>
        <button type="submit">Calcular Fatorial</button>
        <button type="reset">Limpar</button>
        <p>Resultado: <?php echo $resultado; ?></p>
    </form>
</body>
</html>
