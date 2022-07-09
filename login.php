<?php
session_start();
include 'conexao.php';

if (empty($_POST['email']) || empty($_POST['senha'])) {
    header('location:./login-template.php');
}

$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = "SELECT id_adm, nm_adm, email_adm, senha_adm FROM tb_adm WHERE email_adm = '$email' AND senha_adm = '$senha'";

$resultado = mysqli_query($con, $sql);

$row = mysqli_num_rows($resultado);

if ($row == 1) {
    $_SESSION['usuario'] = $email;
    header('location:painelAdm.php');
    exit();
}

$sql = "SELECT id_cliente, email_cliente, senha_cliente FROM tb_cliente WHERE email_cliente = '$email' AND senha_cliente = '$senha'";

$resultado = mysqli_query($con, $sql);

$row = mysqli_num_rows($resultado);

if($row == 1) {

    $_SESSION['usuario'] = $email;
    header('location:homeCliente.php');
    exit();

} else {
    $_SESSION['nao_autenticado'] = true;
    header('location:login-template.php');
    exit();
}
