<?php

include './cabecalho.php';

?>

<!DOCTYPE html>
<html lang="PT-br">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/nao_tem_conta.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Crie uma conta!</title>
</head>

<body>
    <div class="container-fluid py-5 d-flex flex-column justify-content-center" style="margin:15% 0 0 4%;">
        <div>
            <h1 class="display-5 fw-bold">Busque o melhor para você e para seu pet!</h1>
        </div>
        <div>
            <p class="fs-4">Com a conta na PetAnbu você pode usufruir do nosso sistema de agendamento online,<br> trazendo mais práticidade e agilidade para vocês</p>
        </div>
        <div>
            <a class="btn btn-primary btn-lg" href="form_cadastro_cliente.php" style="color: #FFFFFF;">Crie sua conta já</a>
        </div>


    </div>

    <div class="rodape">
        <?php

        include './rodape.php';

        ?>
    </div>

</body>



</html>