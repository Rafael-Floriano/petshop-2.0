<?php

include 'conexao.php';

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = "INSERT INTO tb_adm(nm_adm, email_adm, senha_adm) 
VALUES ('$nome','$email','$senha')";
$resultado = mysqli_query($con,$sql);

?>