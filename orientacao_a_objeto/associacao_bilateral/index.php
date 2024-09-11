<?php
    require_once "Fornecedor.class.php";
    require_once "Produto.class.php";

    $produto1 = new Produto("a","e", 43.99, 10230);
    $produto2 = new Produto("x","z", 9.99, 7);

    $fornecedor = new Fornecedor("p", "11.111.111/001-91", "(12)23232-2332", array($produto1, $produto2));

    echo"<pre>";
    var_dump($fornecedor);
    echo"</pre>";
?>