<?php 
    require_once 'Produto.class.php';
    require_once 'Fornecedor.class.php';

    $fornecedor1 = new Fornecedor("jacare", "1", "14 000000000");
    $fornecedor2 = new Fornecedor("jacarezin", "2", "14 111111111");
    $fornecedor3 = new Fornecedor("jacare gordo", "3", "14 222222222");

    $produto4 = new Produto("mouse","kkk", 11.99, 200, array($fornecedor1, $fornecedor2));

    $produto4->setFornecedor($fornecedor3);


        echo"<h3> Produtos </h3>";
        echo "Nome: {$produto4->getNome()}<br>";
        echo "Descricao: {$produto4->getDescricao()}<br>";

        $preco = number_format($produto4->getPrecos(),2,",",".");

        echo "Preco: R$ $preco<br>";
        echo "Estoque: {$produto4->getEstoque()}<br>";
    foreach($produto4->getFornecedor() as $dados)
    {
        echo "<h3>Fornecedor</h3>";
        echo "Razao social: {$dados->getRazao_social()}
        <br>";
        echo "CNPJ {$dados->getCnpj()}
        <br>";
        echo "Telefone:  {$dados->getTelefone()}
        <br>";

    }
?>