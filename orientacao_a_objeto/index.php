<?php
    require_once "Produto.class.php";

    $produto1 = new Produto("Lapis", "Preto", "1000", 2.00);
    $produto2 = new Produto("Buggati Chiron", "Branca", "1", 100.00);

    echo $produto1->getNome() . "<br>";
    $produto1->setNome("Caneta");
    echo $produto1->getNome() . "<br>"; // vc primeiro faz la o get e o set e depois vc chama ele aqui colocando qual instancia vc quer pegar $produto1 ou $produto2
    
    echo$produto2->getNome();
    echo$produto2->getPreco();
    echo$produto2->getEstoque();
    echo$produto2->getDescricao();
?>