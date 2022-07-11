<?php
include '../conexao.php';
?>

<!DOCTYPE html>
<html lang="PT-br">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/form.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Adicionando Serviços</title>
</head>

<body class="corpo">
    <form class="formulario" action="gravaServico.php" method="post">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nome do serviço:</label>
            <input type="text" class="form-control" required id="exampleInputEmail1" aria-describedby="emailHelp" name="nome">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Preço máximo do serviço:</label>
            <input type="text" class="form-control" required id="exampleInputEmail1" aria-describedby="emailHelp" name="preco_maximo">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Preço mínimo do serviço:</label>
            <input type="text" class="form-control" required id="exampleInputEmail1" aria-describedby="emailHelp" name="preco_minimo">
        </div>
        <div class="form-floating">
            <label for="floatingTextarea2">Descrição:</label>
            <textarea class="form-control" required id="floatingTextarea2" style="height: 100px" name="descricao"></textarea>
        </div>
        <!-- <div class="input-group mb-3">
            <label class="input-group-text" for="inputGroupFile01">Imagem/Template</label>
            <input type="file" class="form-control" id="inputGroupFile01" name="imagem">
        </div> -->
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Especie indicada para o serviço:</label>
            <input type="text" class="form-control" required id="exampleInputEmail1" aria-describedby="emailHelp" name="especie">
        </div>
        <div>
            <button type="submit" class="btn botao-form">Enviar</button>
            <a style="text-decoration:none;" class="btn btn-primary" href="tabelaServico.php">Voltar</a>
        </div>
    </form>
</body>

</html>