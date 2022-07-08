<?php
include '../conexao.php';

$id = $_GET['id'];

$sql = "SELECT * FROM tb_servico WHERE id_servico = $id";
$resultado = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($resultado);

?>

<!DOCTYPE html>
<html lang="PT-br">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/form.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Alterando Serviços</title>
</head>

<body class="corpo">
    <form class="formulario" action="AlteraGrava.php" method="post">
        <h1 class="mb-3">Formulário de alteração de serviços</h1>
        <div>
            <input type="hidden" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="id_servico" value="<?php echo $row['id_servico']; ?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nome do serviço:</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nome" value="<?php echo $row['titulo']; ?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Preço máximo do serviço:</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="preco_maximo" value="<?php echo $row['preco_maximo']; ?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Preço mínimo do serviço:</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="preco_minimo" value="<?php echo$row['preco_minimo']; ?>">
        </div>
        <div class="form-floating">
            <label for="floatingTextarea2">Descrição:</label>
            <textarea class="form-control" id="floatingTextarea2" style="height: 100px" name="descricao"> <?php echo $row['descricao']; ?> </textarea>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Especie indicada para o serviço:</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="especie" value="<?php echo $row['especies']; ?>">
        </div>
        <div>
            <button type="submit" class="btn botao-form">Enviar</button>
            <a style="text-decoration:none;" class="btn btn-primary" href="tabelaServico.php">Voltar</a>
        </div>
    </form>
</body>

</html>