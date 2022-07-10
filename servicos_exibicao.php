<?php

include './conexao.php';
include './verifica_usuario_novo.php';
include './cabecalhoCliente.php';

$id = $_GET['id'];
// print_r($id);
// exit();

$sql = "SELECT * FROM tb_servico WHERE id_servico = $id";
$resultado = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($resultado);

$titulo = $row['titulo'];
$descricao = $row['descricao'];

?>

<!DOCTYPE html>
<html lang="PT-br">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/servico_exibicao.css">
    <title>Lobby de serviços</title>
</head>

<body class="body">
    <div class="cor" style="margin-bottom: 10%;">
        <div class="exibicao">
            <div class="conteudo-cabecalho">
                <div class="img">
                    <img src="./imgs/logo.png" alt="logo do servico" width="250px" height="auto">
                    <h1><?php echo "$titulo" ?></h1>
                </div>
            </div>
        </div>

        <!-- <div class="descricao" style="">
            <p><?php //echo "$descricao" 
                ?></p>
        </div> -->
        <div class="tabela-servico" style="margin: 1% 6% 0 6%;">
            <?php
            $sql = "SELECT agenda.id_agenda,agenda.Horario, agenda.Data_servico, agenda.fk_id_servico, ser.especies FROM tb_agenda_disponivel agenda
            INNER JOIN tb_servico ser ON agenda.fk_id_servico = ser.id_servico WHERE agenda.fk_id_servico = $id;";
            $resultado = mysqli_query($con, $sql);
            ?>

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col" style="text-align: center;">Horário disponível</th>
                        <th scope="col" style="text-align: center;">Data disponível</th>
                        <th scope="col" style="text-align: center;">Espécie</th>
                        <th colspan="2" style="text-align: center;">Funções</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">

                    <?php

                    while ($row = mysqli_fetch_assoc($resultado)) {
                        $id_agenda = $row['id_agenda'];
                        $fk_id_servico = $row['fk_id_servico'];
                        $Horario = $row['Horario'];
                        $Data_servico = $row['Data_servico'];
                        $especie = $row['especies'];

                        echo "<tr>";
                        echo "<td style='text-align: center;'>$Horario</td>";
                        echo "<td style='text-align: center;'>$Data_servico</td>";
                        echo "<td style='text-align: center;'>$especie</td>";
                        echo "<td style='text-align: center;'><a href='agenda_grava.php?id=$id_agenda'>Agendar</a></td>";
                        echo "</tr>";
                    }
                    ?>

                </tbody>
            </table>
        </div>
    </div>
    <?php
    include './rodape.php';
    ?>
</body>

</html>