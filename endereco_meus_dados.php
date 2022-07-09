<?php

include './verifica_login.php';
include './conexao.php';
$email = $_SESSION['usuario'];
$sql = "SELECT * FROM tb_cliente WHERE email_cliente = '$email'";
$resultado = mysqli_query($con, $sql);
$dados = mysqli_fetch_assoc($resultado);
$id_endereco = $dados['fk_id_endereco']; 
//  print_r($email);
include './conexao.php';
include './cabecalhoCliente.php';

$sql = "SELECT * FROM tb_endereco WHERE id_endereco = $id_endereco";
$resultado = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($resultado);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/form.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Meus Dados</title>
</head>

<body class="corpo">
    <form class="formulario" action="altera_endereco_meus_dados.php" method="post" style="margin-bottom: 5%;">
        <h1 class="mb-3">Meus dados</h1>
        <div>
            <a style="text-decoration:none;" class="btn btn-primary" href="meus_dados.php">Meus dados</a>
            <a style="text-decoration:none;" class="btn btn-primary" href="senha_meus_dados.php">Senha</a>
        </div>
        <div>
            <input type="hidden" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="id_endereco" value="<?php echo $row['id_endereco']; ?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Rua:</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="rua" value="<?php echo $row['rua']; ?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Bairro:</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="bairro" value="<?php echo $row['bairro']; ?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Cidade:</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="cidade" value="<?php echo $row['cidade']; ?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Número da residência:</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="numero_casa" value="<?php echo $row['numero_casa']; ?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Número da residência:</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="uf" value="<?php echo $row['uf']; ?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Número da residência:</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="cep" value="<?php echo $row['cep']; ?>">
        </div>
        <div>
            <button type="submit" class="btn botao-form">Salvar</button>
            <a style="text-decoration:none;" class="btn btn-primary" href="homeCliente.php">Voltar</a>
        </div>
    </form>
</body>

<?php include 'rodape.php'; ?>

</html>