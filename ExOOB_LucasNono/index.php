<?php
// Incluir as classes
require 'Pessoa.class.php';
require 'Publicacoes.class.php';
require 'Aluno.class.php';
require 'Autor.class.php';
require 'Editora.class.php';
require 'Emprestimo.class.php';
require 'Genero.class.php';
require 'Itens.class.php';
require 'Livro.class.php';
require 'Revista.class.php';

$autor = new Autor("J.K. Rowling", "Britânica");
$editora = new Editora("12345678000195", "Editora X");
$livro = new Livro("Um Livro Exemplar", "978-3-16-148410-0", "01/01/2022", "O Mágico de Oz", [$autor]);
$itens = new Itens("09/10/1989");
$aluno = new Aluno("123456789", "João da Silva");
$emprestimo = new Emprestimo("02/10/1989", $aluno,"09/10/1989");



echo "<h1>Detalhes do Empréstimo</h1>";
echo "<strong>Aluno:</strong> " . $emprestimo->getAluno()->getNome() . "<br>";
echo "<strong>RA:</strong> " . $emprestimo->getAluno()->getRa() . "<br>";
echo "<strong>Data de devolução:</strong> " . $emprestimo->getItens()[0]->getData_devolucao() . "<br>";

echo "<strong>Editora:</strong> " . $editora->getNome() . "<br>";
echo "<strong>CNPJ:</strong> " . $editora->getCnpj() . "<br>";

echo "<h2>Detalhes do Livro Emprestado</h2>";
echo "<strong>Sinopse:</strong> " . $livro->getSinopse() . "<br>";
echo "<strong>Isbnn:</strong> " . $livro->getIsbnn() . "<br>";

echo "<h2>Detalhes da Editora</h2>";
echo "<strong>CNPJ:</strong> " . $editora->getCnpj() . "<br>";
echo "<strong>Nome:</strong> " . $editora->getNome() . "<br>";

echo "<h2>Detalhes do Autor</h2>";
echo "<strong>Autor:</strong> " . $autor->getNome() . "<br>";
echo "<strong>Nacionalidade:</strong> " . $autor->getNacionalidade() . "<br>";

?>
