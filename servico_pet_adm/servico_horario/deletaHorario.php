<?php

include '../../conexao.php';

$id = $_GET['id'];

$sql = "DELETE FROM tb_agenda_disponivel WHERE id_agenda = $id";
$resultado = mysqli_query($con,$sql);

header('location:tabelaHorario.php');

?>