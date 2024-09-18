<?php
    require_once "Fornecedor.class.php";
    require_once "Produto.class.php";

    $produto1 = new Produto("a","e", 43.99, 10230);
    $produto2 = new Produto("x","z", 9.99, 7);

    $fornecedor = new Fornecedor("p", "11.111.111/001-91", "(12)23232-2332", array($produto1, $produto2));

    $produto3 = new Produto("CARRO", "carro rebaixado", 59999, 16);

    $fornecedor->setProduto($produto3);

    // echo"<pre>";
    // var_dump($fornecedor);
    // echo"</pre>";

    echo "<h3>Fornecedor</h3>";
    echo "Razao social: {$fornecedor->getRazao_social()}
    <br>";
    echo "CNPJ {$fornecedor->getCnpj()}
    <br>";
    echo "Telefone:  {$fornecedor->getTelefone()}
    <br>";
    echo "<h4>Produtos</h4>";
    foreach($fornecedor->getProduto() as $produto)
    {
        echo "Nome: {$produto->getNome()}<br>";
        echo "Descricao: {$produto->getDescricao()}<br>";

        $preco = number_format($produto->getPrecos(),2,",",".");

        echo "Preco: R$ $preco<br>";
        echo "Estoque: {$produto->getEstoque()}<br>";

    }
    

?>