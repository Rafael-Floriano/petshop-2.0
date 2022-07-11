<?php
include '../../conexao.php';
//Tem um bug aqui arruma o select tá bugadinho

$id = $_GET['id'];

$sql = "SELECT * FROM tb_agenda_disponivel WHERE id_agenda = $id";
$resultado = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($resultado);
$fk = $row['fk_id_servico'];

?>

<!DOCTYPE html>
<html lang="PT-br">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/form.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Alterando Serviços</title>
</head>

<body class="corpo">
    <form class="formulario" action="AlteraHorarioGrava.php" method="post" style="margin-top: 10%;">
        <h1 class="mb-3">Alterando horarios</h1>
        <div>
            <input type="hidden" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="id_agenda" value="<?php echo $row['id_agenda']; ?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Selecione o servico:</label>
            <select class="form-select" aria-label="Default select example" style="width: 800px;" name="id">
                <?php
                $sql = "SELECT * FROM tb_servico";
                $resultado = mysqli_query($con, $sql);
                $linha = mysqli_fetch_assoc($resultado);

                while ($linha = mysqli_fetch_assoc($resultado)) {
                    if($linha['id_servico'] == $fk){
                        echo "<option selected value='$linha[id_servico]'>$linha[titulo]</option>";
                    }else{
                        echo "<option value='$linha[id_servico]'>$linha[titulo]</option>";
                    }
                        
                }
                ?>
            </select>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Horário:</label>
            <input type="text" class="form-control" required id="exampleInputEmail1" aria-describedby="emailHelp" name="horario" value="<?php echo $row['Horario'];?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Data:</label>
            <input type="text" class="form-control" required id="exampleInputEmail1" aria-describedby="emailHelp" name="data" placeholder="Ex: 19/10/2004" value="<?php echo $row['Data_servico'];?>">
        </div>
        <div>
            <button type="submit" class="btn botao-form">Enviar</button>
            <a style="text-decoration:none;" class="btn btn-primary" href="./tabelaHorario.php">Voltar</a>
        </div>
    </form>
</body>

</html>