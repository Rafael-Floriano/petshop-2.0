<?php

//  print_r($email);
include './conexao.php';
include './cabecalho.php';

?>

<!DOCTYPE html>
<html lang="PT-br">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/form.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Meus Dados</title>
</head>

<body class="corpo">
    <form class="formulario" action="grava_form_cadastro_cliente.php" method="post" style="margin-bottom: 5%;">
        <h1 class="mb-3">Criando minha conta</h1>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nome Completo:</label>
            <input type="text" class="form-control" required id="exampleInputEmail1" aria-describedby="emailHelp" name="nm_cliente">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">CPF:</label>
            <input type="text" class="form-control" required id="exampleInputEmail1" aria-describedby="emailHelp" name="cpf">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email:</label>
            <input type="email" class="form-control" required id="exampleInputEmail1" aria-describedby="emailHelp" name="email_cliente">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Senha:</label>
            <input type="text" class="form-control" required id="exampleInputEmail1" aria-describedby="emailHelp" name="senha_cliente">
        </div>
        <h1 class="mb-3">Endereço</h1>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Rua:</label>
            <input type="text" class="form-control" required id="exampleInputEmail1" aria-describedby="emailHelp" name="rua">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Bairro:</label>
            <input type="text" class="form-control" required id="exampleInputEmail1" aria-describedby="emailHelp" name="bairro">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Cidade:</label>
            <input type="text" class="form-control" required id="exampleInputEmail1" aria-describedby="emailHelp" name="cidade">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Número da residência:</label>
            <input type="text" class="form-control" required id="exampleInputEmail1" aria-describedby="emailHelp" name="numero_casa">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">UF:</label>
            <input type="text" class="form-control" required id="exampleInputEmail1" aria-describedby="emailHelp" name="uf">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">CEP:</label>
            <input type="text" class="form-control" required id="exampleInputEmail1" aria-describedby="emailHelp" name="cep">
        </div>
        <div>
            <button type="submit" class="btn botao-form">Salvar</button>
            <a style="text-decoration:none;" class="btn btn-primary" href="homeCliente.php">Voltar</a>
        </div>
    </form>
</body>

<?php include 'rodape.php'; ?>

</html>