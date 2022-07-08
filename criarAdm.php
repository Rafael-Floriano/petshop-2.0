<?php

include 'verifica_login.php';

?>

<!DOCTYPE html>
<html lang="PT-br">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/form.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Criando um novo ADM</title>
</head>

<body class="corpo">
    <div class="formulario" style="margin-bottom:200px;">
    <form action="gravaCliente.php" method="POST">
        <div class="mb-4">
            <h1>Cadastro de ADM</h1>
        </div>
        <div class="mb-4">
            <label for="exampleInputEmail1" class="form-label">Nome do novo administrador:</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nome">
        </div>
        <div class="mb-4">
            <label for="exampleInputEmail1" class="form-label">Email do novo administrador:</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
        </div>
        <div class="mb-4">
            <label for="exampleInputEmail1" class="form-label">Senha administrador:</label>
            <input type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="senha">
        </div>
        <div class="mb-4">
            <input type="submit" class="btn btn-success" style="margin-left:40%;" value="Terminar cadastro do Adm">
        </div>
        <div class="mb-4">
            <a class="btn btn-success" style="margin-left:45%;" href="./painelAdm.php">Voltar</a>
        </div>
    </form>
    </div>
</body>

</html>