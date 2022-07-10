<?php

include '../../conexao.php';

$id_agenda = $_POST['id_agenda'];
$id = $_POST['id'];
$Horario = $_POST['horario'];
$Data_servico = $_POST['data'];


$sql = "UPDATE tb_agenda_disponivel SET Horario='$Horario',Data_servico='$Data_servico',fk_id_servico=$id WHERE id_agenda = $id_agenda";

$resultado = mysqli_query($con,$sql);

header('location:./tabelaHorario.php');

?>