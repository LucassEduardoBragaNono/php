<?php
if (isset($_GET['nota1']) && isset($_GET['nota2'])) {
    $nota1 = floatval($_GET['nota1']);
    $nota2 = floatval($_GET['nota2']);
    $media = ($nota1 + $nota2) / 2;
    echo "A média do aluno é: " . number_format($media, 2);
} else {
    echo "Por favor, forneça as notas.";
}
?>
