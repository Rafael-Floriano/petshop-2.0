<?php

include './verifica_login.php';
include './conexao.php';

$id = $_POST['id_cliente'];
$senha_atual = $_POST['senha_atual'];
$senha_nova = $_POST['senha_nova'];

$sql = "SELECT senha_cliente FROM tb_cliente WHERE id_cliente = $id  AND senha_cliente = '$senha_atual'";

$resultado = mysqli_query($con,$sql);
$row = mysqli_num_rows($resultado);
$dados = mysqli_fetch_assoc($resultado);


if($row == 1){
    
    $sql = "UPDATE tb_cliente SET senha_cliente=$senha_nova WHERE id_cliente = $id;";

    $resultado = mysqli_query($con,$sql);

}else{
    $_SESSION['senha_errada'] = true;
    header('location:senha_meus_dados.php');
}

header('location:senha_meus_dados.php');