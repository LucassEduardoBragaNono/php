<?php
    require_once "Cliente.class.php";
    $cliente = new Cliente();
    $conect = $cliente->conexao();
    $resultado = $cliente->buscar_todos_clientes($conect);
    // echo"<pre>";
    // var_dump($resultado);
    // echo"</pre>";
?>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Lista de Clientes</title>
</head>
<body>
    <h1>Cliente</h1>
    <a href="">Novo Cliente</a>
    <br>
    <table border="1">
        <thead>
            <tr>
                <th>Nome:</th>
                <th>CPF:</th>
            </tr>
        </thead>
        <tbody>
            
        </tbody>
    </table> 
</body>
</html>