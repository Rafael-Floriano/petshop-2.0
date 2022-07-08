<?php

include '../conexao.php';

$id = $_GET['id'];

$sql = "DELETE FROM `tb_servico` WHERE id_servico = $id";
$resultado = mysqli_query($con,$sql);

header('location:tabelaServico.php');

?>