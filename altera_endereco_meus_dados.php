<?php

include './verifica_login.php';
include './conexao.php';

$id_endereco = $_POST['id_endereco'];
$rua = $_POST['rua'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$numero_casa = $_POST['numero_casa'];
$uf = $_POST['uf'];
$cep = $_POST['cep'];

$sql = "UPDATE tb_endereco
SET rua='$rua', bairro='$bairro', cidade='$cidade', numero_casa=$numero_casa, uf='$uf',cep='cep' WHERE id_endereco = $id_endereco";

$resultado = mysqli_query($con,$sql);

header('location:endereco_meus_dados.php');

?>