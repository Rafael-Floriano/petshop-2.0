<?php
include '../../conexao.php';

$sql = "SELECT * FROM tb_servico";
$resultado = mysqli_query($con, $sql);

?>

<!DOCTYPE html>
<html lang="PT-br">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/form.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Adicionando horário</title>
</head>

<body class="corpo">
    <form class="formulario" action="gravaHorario.php" method="post" style="margin-top: 10%;">
        <h1 class="mb-3">Adicionando um novo horário</h1>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Selecione o servico:</label>
            <select class="form-select" aria-label="Default select example" style="width: 800px;" name="id">
                <?php
                while($row = mysqli_fetch_assoc($resultado)){
                    echo "<option value='$row[id_servico]'>$row[titulo]</option>";
                }
                ?>
            </select>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Horário:</label>
            <input type="text" class="form-control" required id="exampleInputEmail1" aria-describedby="emailHelp" name="horario">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Data:</label>
            <input type="text" class="form-control" required id="exampleInputEmail1" aria-describedby="emailHelp" name="data" placeholder="Ex: 19/10/2004">
        </div>
        <div>
            <button type="submit" class="btn botao-form">Enviar</button>
            <a style="text-decoration:none;" class="btn btn-primary" href="tabelaServico.php">Voltar</a>
        </div>
    </form>
</body>

</html>