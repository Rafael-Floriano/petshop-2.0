<?php
include '../../conexao.php';

?>

<!DOCTYPE html>
<html lang="PT_br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/tabela.css">
    <link rel="stylesheet" href="../css/form.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Tabela de agenda</title>
</head>

<?php

if (isset($_POST['busca'])) {
    $pesquisa = $_POST['busca'];
} else {
    $pesquisa = '';
}

?>

<body class="">
    <div class="tabela" style="background-color:#ffffff; border-radius:10px; margin:4% 10% 0% 10%;">
        <div class="mb-4">
            <h1 style="margin-left:40%;">Seção de Serviços</h1>
        </div>
        <form class="d-flex mb-3" action="./tabelaConfirmado.php" method="POST">
            <input class="form-control me-2" type="search" placeholder="Pesquisa Serviços" aria-label="Search" name="busca" autofocus>
            <button class="btn btn-outline-success" type="submit">Pesquisar</button>
        </form>
        <div>
            <a style="text-decoration:none;" class="btn btn-success mb-3" href="../../painelAdm.php">Voltar</a>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col" style="text-align: center;">Serviço</th>
                    <th scope="col" style="text-align: center;">Horário agendado</th>
                    <th scope="col" style="text-align: center;">Data agendada</th>
                    <th scope="col" style="text-align: center;">Cliente</th>
                    <th scope="col" style="text-align: center;">Espécie</th>
                    <th colspan="2" style="text-align: center;">Funções</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">

                <?php

                $sql = "SELECT confirma.id_agenda,ser.titulo, confirma.data_servico, confirma.horario, cli.nm_cliente, confirma.Especie_pet FROM tb_agenda_confirmada confirma
                INNER JOIN tb_servico ser ON confirma.fk_id_servico = ser.id_servico INNER JOIN tb_cliente cli ON confirma.fk_id_cliente = cli.id_cliente
                WHERE cli.nm_cliente LIKE '%$pesquisa%'";
                $resultado = mysqli_query($con, $sql);

                while ($row = mysqli_fetch_assoc($resultado)) {
                    $id_agenda = $row['id_agenda'];
                    $titulo = $row['titulo'];
                    $Horario = $row['horario'];
                    $data_servico = $row['data_servico'];
                    $nm_cliente = $row['nm_cliente'];
                    $Especie_pet = $row['Especie_pet'];

                    echo "<tr>";
                    echo "<td style='text-align: center;'>$titulo</td>";
                    echo "<td style='text-align: center;'>$Horario</td>";
                    echo "<td style='text-align: center;'>$data_servico</td>";
                    echo "<td style='text-align: center;'>$nm_cliente</td>";
                    echo "<td style='text-align: center;'>$Especie_pet</td>";
                    echo "<td style='text-align: center;'><a href='deletaConfirmado.php?id=$id_agenda'>Cancelar</a></td>";
                    echo "</tr>";
                }
                ?>

            </tbody>
        </table>
    </div>
</body>

</html>