<?php
$resultado = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $data = $_POST["data"];

    list($dia, $mes, $ano) = explode('/', $data);

    if (checkdate($mes, $dia, $ano)) {
        $resultado = "A data <strong>$data</strong> é válida.";
    } else {
        $resultado = "A data <strong>$data</strong> não é válida.";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Verificação de Data</title>

</head>
<body>
    <form method="post">
        <h1>Verificação de Data no Formato (dd/mm/aaaa)</h1>
        <label for="data">Digite uma data:</label>
        <input type="text" id="data" name="data" required>
        <button type="submit">Verificar</button>
        <button type="reset">Limpar</button>
        <p>Resultado: <?php echo $resultado; ?></p>
    </form>
</body>
</html>
