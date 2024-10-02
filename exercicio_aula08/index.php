<?php
    //CLASSE PAI SEMPRE TEM QUE VIR ANTES
    require_once 'Pessoa.class.php'; //pai
    require_once 'Telefone.class.php';
    require_once 'Aluno.class.php';
    require_once 'Instrutor.class.php';
    require_once 'Treino.class.php';
    require_once 'Aparelho.class.php';

    //COLOCAR EM ORDEM DO QUE PRECISA, SEMPRE PRECISA TER ANTES DO QUE ALGM QUE PRECISA
    $aluno1 = new Aluno("Dor no joelho esquerdo", "11/03/1989", "Lucas", "222.222.222-22", 14, "88888-8888"); //como os outros 2 tao por ultimo, dxa sem nadam se nao tem que colocar tipo array()
    $aparelho1 = new Aparelho("Supino reto com barra");
    $instrutor1 = new Instrutor("Hipertrofia","Dog", "111.111.111-11", 14, "99999-9999");
    $treino1 = new Treino(4, "8-12", $instrutor1, $aluno1, $aparelho1);

    // "<pre>";
    // var_dump($treino1);
    // "</pre>" so utilizei para testar;

    echo "<h1>Treino</h1><br><br>";
    echo "Séries: {$treino1->getSeries()}<br>";
    echo "Repetições: {$treino1->getRepeticoes()}<br>";
    echo "Instrutor: {$treino1->getInstrutor()->getNome()}<br>";
    echo "CPF: {$treino1->getInstrutor()->getCpf()}<br>";
    foreach($treino1->getInstrutor()->getTelefone() as $telef)
    {
        echo "Telefone: {$telef->getNumero()}<br>";
        echo "DDD: {$telef->getDdd()}<br>";
    }
    echo "Aluno: {$treino1->getAluno()->getNome()}<br>";
    echo "CPF: {$treino1->getAluno()->getCpf()}<br>";
    foreach($treino1->getAluno()->getTelefone() as $telef)
    {
        echo "Telefone: {$telef->getNumero()}<br>";
        echo "DDD: {$telef->getDdd()}<br>";
    }
    echo "Restrições: {$treino1->getAluno()->getRestricoes()}<br>";
    echo "Data de nascimento: {$treino1->getAluno()->getDatanasc()}<br>";
    echo "Aparelho: {$treino1->getAparelho()->getDescritivo()}";
?>