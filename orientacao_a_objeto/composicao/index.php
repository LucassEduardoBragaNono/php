<?php
    require_once 'Endereco.class.php';
    require_once 'Pessoa.class.php';

    $pessoa1 = new Pessoa("Joao da Silva", "111.111.111-11");

    $endereco1 = new Endereco("Rua xavis", "708", "19563845", $pessoa1);
    $endereco2 = new Endereco("Rua navis", "475", "34597854", $pessoa1);


    // echo"<pre>";
    // var_dump($endereco1);
    // echo"</pre>";

    echo"<h3>Pessoa</h3>";
    echo "Nome: {$endereco1->getPessoa()->getNome()}<br>";
    echo "CPF: {$endereco1->getPessoa()->getCpf()}<br>";
    echo"<h3>Endereço</h3>";
    echo "Logradouro: {$endereco1->getLogradouro()}<br>";
    echo "Numero: {$endereco1->getNumero()}<br>";
    echo "CEP: {$endereco1->getCep()}<br><hr>";

    $pessoa2 = new Pessoa("Lucas", "222.222.222-22", "Rua raimundo", "234", "45789");

    $pessoa2->setEndereco("Rua x", "444", "45555", null);

    // echo"<pre>";
    // var_dump($pessoa2);
    // echo"</pre>";

    echo"<h3>Pessoa</h3>";
    echo "Nome: {$pessoa2->getNome()}<br>";
    echo "CPF: {$pessoa2->getCpf()}<br>";
    echo"<h3>Endereço</h3>";
    foreach($pessoa2->getEndereco() as $endereco){
        echo "Logradouro: {$endereco->getLogradouro()}<br>";
        echo "Numero: {$endereco->getNumero()}<br>";
        echo "CEP: {$endereco->getCep()}<br><br>";
    }
?>