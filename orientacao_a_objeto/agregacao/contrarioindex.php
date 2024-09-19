<?php
    require_once 'Categoria.class.php';
    require_once 'Produto.class.php';

    $produto1 = new Produto("Bagre", "2m so de bagre", 999.99, 1);
    $produto2 = new Produto("Tilápia", "20cm so de tilapia", 31.99, 8);

    $categoria = new Categoria("Pesca do zé", array($produto1, $produto2));

    echo "Descritivo: {$categoria->getDescritivo()}<br><br>";
    
    foreach ($categoria->getProduto() as $produto) {
        echo "Produto: {$produto->getNome()}<br>";
        echo "Descrição: {$produto->getDescricao()}<br>";
        echo "Preço: R$ {$produto->getPrecos()}<br><br>";
    }
?>