<?php

include './conexao.php';
include './verifica_login.php';
$email = $_SESSION['usuario'];
$id = $_GET['id'];

$sql = "SELECT id_cliente FROM tb_cliente WHERE  email_cliente = '$email'";
$resultadoCliente = mysqli_query($con,$sql);
$rowCliente = mysqli_fetch_assoc($resultadoCliente);
$fk_id_cliente = $rowCliente['id_cliente'];

$sqlSelect = "SELECT agenda.Horario, agenda.Data_servico, agenda.fk_id_servico, ser.especies FROM tb_agenda_disponivel agenda
INNER JOIN tb_servico ser ON agenda.fk_id_servico = ser.id_servico WHERE agenda.id_agenda = $id;";
$resultado = mysqli_query($con, $sqlSelect);
$row = mysqli_fetch_assoc($resultado);
$horario = $row['Horario'];
$Data_servico = $row['Data_servico'];
$fk_id_servico = $row['fk_id_servico'];
$especies = $row['especies'];

$sqlInsert = "INSERT INTO tb_agenda_confirmada(horario, data_servico, fk_id_cliente, fk_id_servico, Especie_pet) 
VALUES ('$horario','$Data_servico',$fk_id_cliente,$fk_id_servico,'$especies')";
$resultadoInsert = mysqli_query($con,$sqlInsert);

$sqlDelete = "DELETE FROM `tb_agenda_disponivel` WHERE id_agenda = $id";
$resultadoDelete = mysqli_query($con,$sqlDelete);

header('location:meus_servicos.php');
?>