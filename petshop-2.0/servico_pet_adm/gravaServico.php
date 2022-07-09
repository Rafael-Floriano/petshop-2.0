<?php

include '../conexao.php';

$nm_servico = $_POST['nome'];
$descricao = $_POST['descricao'];
$preco_maximo = $_POST['preco_maximo'];
$preco_minimo = $_POST['preco_minimo'];
$especie = $_POST['especie'];

$sql = "INSERT INTO tb_servico(titulo, descricao, preco_maximo, preco_minimo, especies) VALUES ('$nm_servico','$descricao','$preco_maximo',' $preco_minimo', '$especie');";
$resultado = mysqli_query($con,$sql);

header('location:tabelaServico.php');

?>