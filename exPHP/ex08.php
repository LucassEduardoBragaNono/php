<?php
    $resultado = '';
    if ($_POST) {
        $ano = $_POST['ano'];

        function verificarBissexto($ano) {
            if (($ano % 4 == 0 && $ano % 100 != 0) || ($ano % 400 == 0)) {
                return true;
            } else {
                return false;
            }
        }

        if (verificarBissexto($ano)) {
            $resultado = "<p>O ano $ano é bissexto.</p>";
        } else {
            $resultado = "<p>O ano $ano não é bissexto.</p>";
        }
    }
    ?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Verificar Ano Bissexto</title>
</head>
<body>
    <form action="" method="post">
        <h1>Verificar se um ano é bissexto</h1>
        <label for="ano">Digite o ano:</label>
        <input type="number" id="ano" name="ano" required>
        <button type="submit">Verificar</button>
        <button type="reset">Limpar</button>
        <p>Resultado: <?php echo $resultado ?></p>
    </form>
</body>
</html>
