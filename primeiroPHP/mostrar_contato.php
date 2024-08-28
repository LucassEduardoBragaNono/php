<?php
    if($_GET){
    require_once "Cliente.class.php";

    $obj = new Cliente();

    $obj->nome = $_GET["nome"];
    $obj->sobrenome = $_GET["sobrenome"];
    $obj->cpf = $_GET["cpf"];

    echo "<pre>";
    var_dump($obj);
    echo "</pre>";

    $obj->inserir();

    // echo "O nome é: " .$_GET["nome"] . "<br>";

    // echo "<h1>O sobrenome é: " .$_GET["sobrenome"] . "</h1><br>";
    }
    else
    {
        header("location:index.html");
    }
?>