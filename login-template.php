<?php
include './cabecalho.php';
session_start(); 
?>

<!DOCTYPE html>
<html lang="PT-br">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/login.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>LoginPet</title>
</head>

<body class="img-fluid">
    <form action="login.php" method="POST" class="bunda" style=margin-bottom:12%;>
        <?php
            if(isset($_SESSION['nao_autenticado'])):
        ?>
        <div class="form-group" style="text-align: center; color:red;">
            <label for="exampleInputEmail1">*Email ou Senha é inválido*</label>
        </div>
        <?php
            endif;
            unset($_SESSION['nao_autenticado']);
        ?>
        <div class="form-group">
            <label for="exampleInputEmail1">Email:</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email do usuário" name="email">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Senha:</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Senha do usuário" name="senha">
        </div>
        <button type="submit" class="btn btn-success" style="margin-left:44%;">Entrar</button><br>
    </form>
</body>
<?php
include './rodape.php';
?>
</html>