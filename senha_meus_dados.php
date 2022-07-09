<?php

include './verifica_login.php';
$email = $_SESSION['usuario'];
//  print_r($email);
include './conexao.php';
include './cabecalhoCliente.php';

$sql = "SELECT * FROM tb_cliente WHERE  email_cliente = '$email'";
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
    <form class="formulario" action="altera_senha_meus_dados.php" method="post" style="margin-bottom: 5%;">
        <h1 class="mb-3">Meus dados</h1>
        <div>
            <a style="text-decoration:none;" class="btn btn-primary" href="endereco_meus_dados.php">Endereço</a>
            <a style="text-decoration:none;" class="btn btn-primary" href="meus_dados.php">Meus dados</a>
        </div>
        <?php
        if (isset($_SESSION['senha_errada'])) :
        ?>
            <div class="form-group" style="text-align: center; color:red;">
                <label for="exampleInputEmail1">*Senha está errada*</label>
            </div>
        <?php
        endif;
        unset($_SESSION['senha_errada']);
        ?>
        <div>
            <input type="hidden" class="form-control" required id="exampleInputEmail1" aria-describedby="emailHelp" name="id_cliente" value="<?php echo $row['id_cliente']; ?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Senha Atual:</label>
            <input type="text" class="form-control" required id="exampleInputEmail1" aria-describedby="emailHelp" name="senha_atual">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nova senha:</label>
            <input type="text" class="form-control" required id="exampleInputEmail1" aria-describedby="emailHelp" name="senha_nova">
        </div>
        <div>
            <button type="submit" class="btn botao-form">Salvar</button>
            <a style="text-decoration:none;" class="btn btn-primary" href="homeCliente.php">Voltar</a>
        </div>
    </form>
</body>

<?php include 'rodape.php'; ?>

</html>