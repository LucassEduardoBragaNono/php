<?php
	if($_GET)
	{
		require_once "Cliente.class.php";
		
		// $obj = new Cliente();

		$obj = new Cliente(nome:$_GET["nome"], sobrenome:$_GET["sobrenome"], cpf:$_GET["cpf"]); //o bob construtor + ordem
		
		//abrir conexao com o banco de dados
		$conect = $obj->conexao();
		// $obj->nome = $_GET["nome"];
		// $obj->sobrenome = $_GET["sobrenome"];
		// $obj->cpf = $_GET["cpf"];
		
		
		$msg = $obj->inserir($conect);

		echo $msg;
		
		
		// echo "<pre>";
		// var_dump($obj);
		// echo "</pre>";




		/*echo "<h1 style='color:blue'>O nome é " . $_GET["nome"] . "</h1><br>";
		
		echo "O Sobrenome é {$_GET["sobrenome"]}<br>";*/
	}
	else
	{
		header("location:index.html");
	}
?>