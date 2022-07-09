<?php

include './conexao.php';

//CLIENTE
$nm_cliente = $_POST['nm_cliente'];
$cpf = $_POST['cpf'];
$email_cliente = $_POST['email_cliente'];
$senha_cliente = $_POST['senha_cliente'];

//ENDERECO
$rua = $_POST['rua'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$numero_casa = $_POST['numero_casa'];
$uf = $_POST['uf'];
$cep = $_POST['cep'];

$sql = "INSERT INTO tb_endereco(rua, bairro, cidade, numero_casa, uf, cep) 
VALUES ('$rua','$bairro','$cidade',$numero_casa,'$uf','$cep')";
$resultado = mysqli_query($con,$sql);

$sql = "SELECT id_endereco FROM tb_endereco WHERE id_endereco>0 ORDER BY id_endereco DESC limit 1;";
$resultado = mysqli_query($con,$sql);
$row = mysqli_fetch_assoc($resultado);
$id_endereco = $row['id_endereco'];

$sql = "INSERT INTO tb_cliente(nm_cliente, cpf, email_cliente, senha_cliente, fk_id_endereco) 
VALUES ('$nm_cliente','$cpf','$email_cliente','$senha_cliente', $id_endereco)";
$resultado = mysqli_query($con,$sql);

header('location:login-template.php');


?>