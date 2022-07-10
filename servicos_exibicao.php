<?php

include './conexao.php';
include './verifica_usuario_novo.php';
include './cabecalhoCliente.php';

$id= $_GET['id'];
// print_r($id);
// exit();

$sql = "SELECT * FROM tb_servico WHERE id_servico = $id";
$resultado = mysqli_query($con,$sql);
$row = mysqli_fetch_assoc($resultado);

$titulo = $row['titulo'];
$descricao = $row['descricao'];

?>

<!DOCTYPE html>
<html lang="PT-br">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/servico_exibicao.css">
    <title>Lobby de serviços</title>
</head>

<body class="body">
    <div class="cor">
        <div class="exibicao">
            <div class="conteudo-cabecalho">
                <div class="img">
                    <img src="./imgs/logo.png" alt="logo do servico" width="250px" height="auto">
                    <h1><?php echo "$titulo"?></h1>
                </div>
            </div>
        </div>

        <div class="descricao">
            <p><?php echo "$descricao"?></p>
        </div>
        <div class="tabela-servico"></div>
    </div>

    <?php
    include './rodape.php';
    ?>
</body>

</html>