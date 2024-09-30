<?php
    $resultado = '';
    if ($_POST) {
        $palavrasInput = $_POST['palavras'];

        
        function contarPalavras($input) {
            
            $input = strtolower(trim($input));

            $input = str_replace(',', ' ', $input); 
            $palavrasArray = explode(' ', $input); 

            $palavrasArray = array_filter($palavrasArray);

            $contagem = array_count_values($palavrasArray);

            return $contagem;
        }


        $contagemResultado = contarPalavras($palavrasInput);
        $resultado = "<ul>";
        foreach ($contagemResultado as $palavra => $quantidade) {
            $resultado .= "<li>" . htmlspecialchars($palavra) . ": " . $quantidade . "</li>";
        }
        $resultado .= "</ul>";
    }
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Contador de Palavras</title>
</head>
<body>
    <form action="" method="post">
        <h1>Contador de Palavras</h1>
        <label for="palavras">Digite uma lista de palavras separadas por espaços ou vírgulas:</label>
        <textarea id="palavras" name="palavras" rows="5" required></textarea>
        <button type="submit">Contar Palavras</button>
        <button type="reset">Limpar</button>
        <p>Resultado: <?php echo $resultado ?></p>
    </form>
</body>
</html>
