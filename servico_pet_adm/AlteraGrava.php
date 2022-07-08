<?php

include '../conexao.php';

$id_servico = $_POST['id_servico'];
$nm_servico = $_POST['nome'];
$preco_maximo = $_POST['preco_maximo'];
$preco_minimo = $_POST['preco_minimo'];
$descricao = $_POST['descricao'];
$especies = $_POST['especie'];

$sql = "UPDATE tb_servico 
SET titulo='$nm_servico',descricao='$descricao',preco_minimo='$preco_minimo',preco_maximo='$preco_maximo',especies='$especies' WHERE id_servico = $id_servico";

$resultado = mysqli_query($con,$sql);

header('location:tabelaServico.php');

?>