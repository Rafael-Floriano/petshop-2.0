<?php

include '../../conexao.php';

$fk = $_POST['id'];
$horario = $_POST['horario'];
$data = $_POST['data'];


$sql = "INSERT INTO tb_agenda_disponivel (Horario, Data_servico, fk_id_servico) VALUES ('$horario','$data',$fk)";
$resultado = mysqli_query($con,$sql);

header('location:tabelaHorario.php');

?>