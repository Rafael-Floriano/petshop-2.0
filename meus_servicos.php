<!DOCTYPE html>
<html lang="PT-br">

<?php

include './verifica_login.php';
$email = $_SESSION['usuario'];
//  print_r($email);
include './conexao.php';
include './cabecalhoCliente.php';

$sql = "SELECT id_cliente FROM tb_cliente WHERE  email_cliente = '$email'";
$resultado = mysqli_query($con,$sql);
$rowCliente = mysqli_fetch_assoc($resultado);
$fk_id_cliente = $rowCliente['id_cliente'];

$sql = "SELECT confirma.id_agenda,ser.titulo, confirma.data_servico, confirma.horario, confirma.Especie_pet FROM tb_agenda_confirmada confirma
INNER JOIN tb_servico ser ON confirma.fk_id_servico = ser.id_servico WHERE fk_id_cliente = $fk_id_cliente;";
$resultado = mysqli_query($con,$sql);

?>



<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meus serviços</title>
</head>

<body>

    <div class="tabela-servico" style="margin: 1% 6% 25% 6%;">
        <h1 style="text-align: center; margin-bottom:3%;">Seus serviços agendados</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col" style="text-align: center;">Serviço</th>
                    <th scope="col" style="text-align: center;">Horário agendado</th>
                    <th scope="col" style="text-align: center;">Data agendada</th>
                    <th scope="col" style="text-align: center;">Espécie</th>
                    <th colspan="2" style="text-align: center;">Funções</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">

                <?php

                while ($row = mysqli_fetch_assoc($resultado)) {
                    $id_agenda = $row['id_agenda'];
                    $titulo = $row['titulo'];
                    $Horario = $row['horario'];
                    $data_servico = $row['data_servico'];
                    $Especie_pet = $row['Especie_pet'];

                    echo "<tr>";
                    echo "<td style='text-align: center;'>$titulo</td>";
                    echo "<td style='text-align: center;'>$Horario</td>";
                    echo "<td style='text-align: center;'>$data_servico</td>";
                    echo "<td style='text-align: center;'>$Especie_pet</td>";
                    echo "<td style='text-align: center;'><a href='cancela_meus_servicos.php?id=$id_agenda'>Cancelar</a></td>";
                    echo "</tr>";
                }
                ?>

            </tbody>
        </table>
    </div>
    <?php
    include './rodape.php';
    ?>
</body>

</html>