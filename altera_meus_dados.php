<?php

include './verifica_login.php';
include './conexao.php';

$id_cliente = $_POST['id_cliente'];
$nm_cliente = $_POST['nm_cliente'];
$email_cliente = $_POST['email_cliente'];
$cpf = $_POST['cpf'];

$sql = "UPDATE tb_cliente SET nm_cliente='$nm_cliente',email_cliente='$email_cliente' WHERE id_cliente = $id_cliente";

$resultado = mysqli_query($con,$sql);

header('location:meus_dados.php');

?>