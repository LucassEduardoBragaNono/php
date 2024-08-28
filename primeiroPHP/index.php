<?php
    require_once "Cliente.class.php";
    $cliente = new Cliente();
    $conect = $cliente->conexao();
    $resultado = $cliente->buscar_todos_clientes($conect);
    // echo"<pre>";
    // var_dump($resultado);
    // echo"</pre>";
    if($_GET)
    {
        echo $_GET["msg"];
    }
?>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Lista de Clientes</title>
</head>
<body>
    <h1>Cliente</h1>
    <a href="form_cliente.html">Novo Cliente</a>
    <br>
    <table border="1">
        <thead>
            <tr>
                <th>Nome:</th>
                <th>CPF:</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($resultado as $dado)
                {
                    echo "<tr>
                          <td>{$dado->nome}&nbsp;
                          {$dado->sobrenome}
                          </td>
                          <td>{$dado->cpf}</td>
                          </td>";
                }
            ?>
        </tbody>
    </table> 
</body>
</html>