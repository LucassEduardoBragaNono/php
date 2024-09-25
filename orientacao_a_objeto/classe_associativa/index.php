<?php

    require_once "Filme.class.php";
    require_once "Ator.class.php";
    require_once "Papel.class.php";

    $ator1 = new Ator("Marquinhos");

    $filme1 = new Filme("Carros");

    $papel1 = new Papel("O fodão", $filme1, $ator1);

    // echo"<pre>";
    // var_dump($papel1);
    // echo"</pre>";

    echo"<h3>Ator</h3>";
    echo"Nome do ator: {$papel1->getAtor()->getNome()}<br>";
    echo"<h3>Filme</h3>";
    echo"Nome do filme: {$papel1->getFilme()->getNome()}<br>";
    echo"<h3>Papel</h3>";
    echo"Nome do papel: {$papel1->getNome()}<br>";
    