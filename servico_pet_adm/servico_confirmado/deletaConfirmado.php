<?php

include '../../conexao.php';

$id = $_GET['id'];

$sql = "DELETE FROM tb_agenda_confirmada WHERE id_agenda = $id";
$resultado = mysqli_query($con,$sql);

header('location:tabelaConfirmada.php');

?>