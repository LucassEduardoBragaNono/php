<?php

    require_once 'Categoria.class.php';
    require_once 'Produto.class.php';


    $categoria = new Categoria("Pesca do zé");

    $produto1 = new Produto("Bagre", "2m so de bagre", 999.99, 1, $categoria);
    $produto2 = new Produto("Tilápia", "20cm so de tilapia", 31.99, 8, $categoria);

        echo "<br><br>";
        echo"<h3> Produto 1 </h3>";
        echo "Nome: {$produto1->getNome()}<br>";
        echo "Descricao: {$produto1->getDescricao()}<br>";

        $preco = number_format($produto1->getPrecos(),2,",",".");

        echo "Preco: R$ $preco<br>";
        echo "Estoque: {$produto1->getEstoque()}<br>";

        echo "Categoria: {$produto1->getCategoria()->getDescritivo()}<br>"

        //instanciar uma categoria e associar objetos produto e mostrar todos os dados do objeto categoria

?>