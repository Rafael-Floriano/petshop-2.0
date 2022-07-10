<?php
include '../../conexao.php';
?>

<!DOCTYPE html>
<html lang="PT_br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/tabela.css">
    <link rel="stylesheet" href="../../css/form.css">
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
            <h1 style="margin-left:40%;">Seção de Horários</h1>
        </div>
        <form class="d-flex mb-3" action="./tabelaServico.php" method="POST">
            <input class="form-control me-2" type="search" placeholder="Pesquisa Serviços" aria-label="Search" name="busca" autofocus>
            <button class="btn btn-outline-success" type="submit">Pesquisar</button>
        </form>
        <div>
            <a style="text-decoration:none;" class="btn btn-primary mb-3" href="./adicionaHorario.php">Adicionar novo horario</a>
            <a style="text-decoration:none;" class="btn btn-success mb-3" href="../../painelAdm.php">Voltar</a>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">id agenda</th>
                    <th scope="col">Hórario</th>
                    <th scope="col">Data</th>
                    <th scope="col">Nome do serviço</th>
                    <th colspan="2">Funções</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">

                <?php

                $sql = "SELECT agenda.id_agenda, agenda.Horario,agenda.Data_servico, ser.titulo FROM tb_agenda_disponivel agenda INNER JOIN tb_servico ser
                ON agenda.fk_id_servico = ser.id_servico WHERE ser.titulo LIKE '%$pesquisa%'";
                $resultado = mysqli_query($con, $sql);

                while ($row = mysqli_fetch_assoc($resultado)) {
                    $id_servico = $row['id_agenda'];
                    $nm_servico = $row['Horario'];
                    $descricao = $row['Data_servico'];
                    $precoMinimo = $row['titulo'];

                    echo "<tr>";
                    echo "<td>$id_servico</td>";
                    echo "<td>$nm_servico</td>";
                    echo "<td>$descricao</td>";
                    echo "<td>$precoMinimo</td>";
                    echo "<td><a href='alteraHorario.php?id=$id_servico'>Alterar</a></td>";
                    echo "<td><a href='deletaHorario.php?id=$id_servico'>Deletar</a></td>";
                    echo "</tr>";
                }
                ?>

            </tbody>
        </table>
    </div>
</body>

</html>